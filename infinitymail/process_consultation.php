<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hmisphp"; // Ensure this is the correct database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $department = trim($_POST['Department']);
    $datetime = trim($_POST['datetime']);
    $reason = trim($_POST['reason']);

    // Check for empty fields
    if (empty($name) || empty($email) || empty($phone) || empty($department) || empty($datetime) || empty($reason)) {
        die("Error: All fields are required.");
    }

    // Prepare SQL statement
    $sql = "INSERT INTO appointment_requests (patient_name, email, phone_number, department, preferred_datetime, consultation_reason) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssssss", $name, $email, $phone, $department, $datetime, $reason);
        if ($stmt->execute()) {
            header("Location: confirmation.php"); // Redirect after successful booking
            exit();
        } else {
            die("Error: " . $stmt->error);
        }
        $stmt->close();
    } else {
        die("Error preparing statement: " . $conn->error);
    }
}

$conn->close();
?>
