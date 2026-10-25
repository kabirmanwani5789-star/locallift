<?php
// Local XAMPP defaults. Change these values for your own environment.
mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli('localhost', 'root', '', 'inventory_management');
if ($conn->connect_error) {
    http_response_code(500);
    exit('Database connection failed. Import database/inventory.sql and check config.php.');
}
$conn->set_charset('utf8mb4');
