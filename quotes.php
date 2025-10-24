<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

// Include database connection
include 'db_connection.php';

// Handle deletion request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM quotes WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Quote deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting quote: " . $conn->error . "');</script>";
    }
}

// Set default sort column and order
$sort_column = isset($_GET['sort_column']) ? $_GET['sort_column'] : 'id';
$sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : 'ASC';

// Fetch sorted quotes from the database
$sql = "SELECT * FROM quotes ORDER BY $sort_column $sort_order";
$result = $conn->query($sql);

// Determine the sorting order for the next click (toggle between ASC and DESC)
$next_order = $sort_order === 'ASC' ? 'DESC' : 'ASC';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Quotes Management</title>
    <style>
        /* Your existing CSS */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
            color: #343a40;
        }

        h2 {
            text-align: center;
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .table-container {
            margin: 20px 0;
            overflow-x: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .table-container:hover {
            transform: scale(1.02);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1rem;
            transition: all 0.3s ease;
            table-layout: fixed; /* Ensures proper content wrapping */
        }

        th, td {
            padding: 12px;
            border: 1px solid #dee2e6;
            text-align: left;
            word-wrap: break-word; /* Forces content to wrap inside the cells */
        }

        th {
            background-color: #007bff;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        th.sortable:hover {
            background-color: #0056b3;
        }

        tr {
            transition: background-color 0.3s ease;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .filter-input {
            margin-bottom: 20px;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #dee2e6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            transition: box-shadow 0.3s ease;
        }

        .filter-input:focus {
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        .btn-home, .btn-delete {
            padding: 8px 16px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            display: inline-block;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-home:hover, .btn-delete:hover {
            background-color: #0056b3;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }
        a{
            text-decoration: none;
                color: white;
        }
        .btn-home + .btn-home {
    margin-left: 10px;
    background-color: #28a745; /* Green for variety */
}

.btn-home + .btn-home:hover {
    background-color: #218838;
}

    </style>
</head>
<body>
    <h2>Quotes Management</h2>

    <!-- Home Button -->
    <a href="index.php" class="btn-home">Go to Home</a>
<a href="admin_cards.php" class="btn-home">See Cards Detail</a>

    <!-- Search Input -->
    <input type="text" id="filter-input" class="filter-input" placeholder="Search quotes...">

    <div class="table-container">
        <table id="quotes-table">
            <thead>
                <tr>
                    <th><a href="?sort_column=id&sort_order=<?php echo $next_order; ?>" class="sortable">ID</a></th>
                    <th><a href="?sort_column=name&sort_order=<?php echo $next_order; ?>" class="sortable">Name</a></th>
                    <th><a href="?sort_column=email&sort_order=<?php echo $next_order; ?>" class="sortable">Email</a></th>
                    <th><a href="?sort_column=phone&sort_order=<?php echo $next_order; ?>" class="sortable">Phone</a></th>
                    <th><a href="?sort_column=country&sort_order=<?php echo $next_order; ?>" class="sortable">Country</a></th>
                    <th><a href="?sort_column=city&sort_order=<?php echo $next_order; ?>" class="sortable">City</a></th>
                    <th><a href="?sort_column=company&sort_order=<?php echo $next_order; ?>" class="sortable">Company</a></th>
                    <th><a href="?sort_column=message&sort_order=<?php echo $next_order; ?>" class="sortable">Message</a></th>
                    <th><a href="?sort_column=submission_date&sort_order=<?php echo $next_order; ?>" class="sortable">Submission Date</a></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['phone']}</td>";
                        echo "<td>{$row['country']}</td>";
                        echo "<td>{$row['city']}</td>";
                        echo "<td>{$row['company']}</td>";
                        echo "<td>{$row['message']}</td>";
                        echo "<td>{$row['submission_date']}</td>";
                        echo "<td><a href='?delete_id={$row['id']}' class='btn-delete'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No quotes found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById('filter-input').addEventListener('keyup', function() {
            var filter = this.value.toLowerCase();
            var rows = document.querySelectorAll('#quotes-table tbody tr');

            rows.forEach(function(row) {
                var match = row.textContent.toLowerCase().includes(filter);
                row.style.display = match ? '' : 'none';
            });
        });
    </script>
</body>
</html>

<?php
$conn->close();
?>
