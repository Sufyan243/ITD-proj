<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
  header("Location: login.php");
  exit();
}
include 'db_connection.php';

// Handle add/edit/delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Image upload
    $imagePath = '';
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) mkdir($targetDir);
        $imagePath = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
    }

    // PDF upload (only for allowed categories)
    $allowedPDF = ['lasercutting', 'cncmachine', 'injectionmoulding'];
    $pdfPath = '';
    if (in_array($category, $allowedPDF) && !empty($_FILES['pdf']['name'])) {
        $targetDir = "uploads/";
        $pdfPath = $targetDir . basename($_FILES["pdf"]["name"]);
        move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdfPath);
    }

    if ($action === 'add') {
        $sql = "INSERT INTO cards (category, title, description, image, pdf, created_at)
                VALUES ('$category', '$title', '$description', '$imagePath', '$pdfPath', NOW())";
        mysqli_query($conn, $sql);
    } elseif ($action === 'edit') {
        $id = $_POST['id'];
        $update = "UPDATE cards SET category='$category', title='$title', description='$description'";
        if ($imagePath) $update .= ", image='$imagePath'";
        if ($pdfPath) $update .= ", pdf='$pdfPath'";
        $update .= " WHERE id=$id";
        mysqli_query($conn, $update);
    }
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($conn, "DELETE FROM cards WHERE id=$id");
    header("Location: admin_cards.php");
    exit();
}

// Fetch all cards
$cards = mysqli_query($conn, "SELECT * FROM cards ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin - Manage Cards</title>
<style>
body {
  font-family: "Poppins", sans-serif;
  background: #f9fafb;
  margin: 0; padding: 20px;
}
h2 {
  text-align: center;
  margin-bottom: 20px;
}
.container {
  max-width: 1000px;
  margin: auto;
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.table {
  width: 100%;
  border-collapse: collapse;
}
.table th, .table td {
  padding: 12px;
  border-bottom: 1px solid #eee;
  text-align: left;
}
.table th {
  background: #f1f1f1;
}
.table tr:hover {
  background: #f9f9f9;
}
button, .btn {
  background: #007bff;
  border: none;
  padding: 8px 12px;
  color: white;
  border-radius: 5px;
  cursor: pointer;
}
.btn-danger { background: #dc3545; }
.btn-secondary { background: #6c757d; }
button:hover, .btn:hover {
  opacity: 0.9;
}
.actions {
  display: flex;
  gap: 6px;
}
.modal {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
}
.modal-content {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  width: 400px;
}
.modal-content input, .modal-content textarea, .modal-content select {
  width: 100%;
  margin-bottom: 10px;
  padding: 8px;
}
.modal-content h3 { margin-top: 0; }
.close {
  float: right;
  cursor: pointer;
  color: #999;
}
</style>
</head>
<body>

<div class="container">
  <h2>Manage Cards</h2>
  <button onclick="openModal('add')">+ Add New Card</button><br><br>

  <table class="table">
    <tr>
      <th>ID</th>
      <th>Category</th>
      <th>Title</th>
      <th>Image</th>
      <th>PDF</th>
      <th>Actions</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($cards)) { ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= ucfirst($row['category']) ?></td>
        <td><?= htmlspecialchars($row['title']) ?></td>
        <td><?php if($row['image']) echo "<img src='{$row['image']}' width='60'>"; ?></td>
        <td>
          <?php 
          if ($row['pdf'])
            echo "<a class='btn btn-secondary' href='{$row['pdf']}' target='_blank'>View PDF</a>";
          else
            echo "-";
          ?>
        </td>
        <td class="actions">
          <button onclick="editCard(<?= htmlspecialchars(json_encode($row)) ?>)">Edit</button>
          <a class="btn btn-danger" href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this card?')">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>

<!-- Modal -->
<div class="modal" id="cardModal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h3 id="modalTitle">Add New Card</h3>
    <form method="POST" enctype="multipart/form-data">
      <input type="hidden" name="action" id="action" value="add">
      <input type="hidden" name="id" id="card_id">

      <label>Category:</label>
      <select name="category" id="category" required onchange="togglePdfField()">
        <option value="">Select Category</option>
        <option value="lasercutting">Laser Cutting</option>
        <option value="laser_accessories">Laser Accessories</option>
        <option value="cncmachine">CNC Machine</option>
        <option value="mold">Mold</option>
        <option value="injectionmoulding">Injection Moulding</option>
      </select>

      <label>Title:</label>
      <input type="text" name="title" id="title" required>

      <label>Description:</label>
      <textarea name="description" id="description" rows="3"></textarea>

      <label>Image:</label>
      <input type="file" name="image" accept="image/*">

      <div id="pdfField">
        <label>PDF (optional):</label>
        <input type="file" name="pdf" accept="application/pdf">
      </div>

      <button type="submit">Save</button>
    </form>
  </div>
</div>

<script>
const modal = document.getElementById('cardModal');
const pdfField = document.getElementById('pdfField');

function openModal(action) {
  document.getElementById('modalTitle').innerText = action === 'add' ? 'Add New Card' : 'Edit Card';
  document.getElementById('action').value = action;
  modal.style.display = 'flex';
  togglePdfField();
}
function closeModal() {
  modal.style.display = 'none';
  document.querySelector('form').reset();
}

function editCard(card) {
  openModal('edit');
  document.getElementById('card_id').value = card.id;
  document.getElementById('category').value = card.category;
  document.getElementById('title').value = card.title;
  document.getElementById('description').value = card.description;
  togglePdfField();
}

function togglePdfField() {
  const cat = document.getElementById('category').value;
  const noPdfCats = ['mold', 'laser_accessories'];
  pdfField.style.display = noPdfCats.includes(cat) ? 'none' : 'block';
}
window.onclick = e => { if (e.target === modal) closeModal(); };
</script>
</body>
</html>
