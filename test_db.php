<?php
require_once 'assets/inc/config.php';

if (isset($mysqli) && !$mysqli->connect_error) {
    echo "✅ Database connected successfully!";
} else {
    echo "❌ Database connection failed!";
}
?>
