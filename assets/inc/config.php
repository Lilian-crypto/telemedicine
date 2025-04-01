<?php 
// Database Credentials
$dbuser = "root";  // Ensure it's "root" if using XAMPP
$dbpass = "";      // Leave empty if no password is set
$host = "localhost";
$db = "hmisphp";

// Create a new MySQLi connection
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Check connection and handle errors
if ($mysqli->connect_error) {
    die("❌ Database Connection Failed: " . $mysqli->connect_error);
}

// Optional: Set character encoding to avoid encoding issues
$mysqli->set_charset("utf8");

// Debugging: Uncomment this to verify connection (Remove in production)
// echo "✅ Database connected successfully!";  
?>
