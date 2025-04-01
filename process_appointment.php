<?php
session_start();
include('assets/inc/config.php'); // Include database connection

// Check if database connection is working
if (!$mysqli) {
    die("❌ Database connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $doctor_id = trim($_POST['doctor_id']);
    $department = trim($_POST['department']);
    $preferred_datetime = trim($_POST['preferred_datetime']);
    $reason = trim($_POST['reason']);

    // Debugging: Print values to check if data is received
    echo "<h3>DEBUG: Checking Form Data</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "Doctor ID: $doctor_id <br>";
    echo "Department: $department <br>";
    echo "Preferred DateTime: $preferred_datetime <br>";
    echo "Reason: $reason <br>";

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($doctor_id) || empty($department) || empty($preferred_datetime) || empty($reason)) {
        $_SESSION['error'] = "⚠️ All fields are required.";
        header("Location: appointment.php"); // Redirect back if fields are missing
        exit;
    }

    // Prepare SQL to insert into database
    $query = "INSERT INTO consultations (name, email, phone, doctor_id, department, preferred_datetime, reason, status) 
              VALUES (?, ?, ?, ?, ?, ?, ?, 'Pending')";
    $stmt = $mysqli->prepare($query) or die("❌ SQL error: " . $mysqli->error);

    if ($stmt) {
        $stmt->bind_param('sssssss', $name, $email, $phone, $doctor_id, $department, $preferred_datetime, $reason);
        if ($stmt->execute()) {
            $_SESSION['success'] = "✅ Consultation request submitted successfully!";
            echo "<h3>✅ Success! Redirecting to confirmation...</h3>";
            header("Refresh: 3; URL=confirmation.php"); // Redirect after 3 seconds
            exit;
        } else {
            echo "❌ Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "❌ Database error: " . $mysqli->error;
    }
} else {
    echo "⚠️ Invalid access!";
    exit;
}
?>
