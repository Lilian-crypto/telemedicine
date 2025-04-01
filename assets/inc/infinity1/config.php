<?php 
// Database Credentials
$host = "sql304.infinityfree.com"; // MySQL hostname
$username = "if0_38645621"; // MySQL username
$password = ""; // Empty password
$database = "hmisphp"; // DB name

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
