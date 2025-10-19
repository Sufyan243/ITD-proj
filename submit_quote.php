<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO quotes (name, email, phone, country, city, company, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $country, $city, $company, $message);

    if ($stmt->execute()) {
        // Set session variable and redirect
        $_SESSION['form_submitted'] = true;
        header("Location: aboutus.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>