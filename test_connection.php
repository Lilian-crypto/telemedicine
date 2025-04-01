<?php
if (file_exists(__DIR__ . '/backend/doc/assets/inc/config.php')) {
    include __DIR__ . '/backend/doc/assets/inc/config.php';
} elseif (file_exists(__DIR__ . '/backend/admin/assets/inc/config.php')) {
    include __DIR__ . '/backend/admin/assets/inc/config.php';
} else {
    die("Error: config.php not found!");
}
?>
