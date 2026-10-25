<?php
/*
|--------------------------------------------------------------------------
| LocalLift Database Connection
|--------------------------------------------------------------------------
| Author  : Kabir Team
| Version : 1.0
|--------------------------------------------------------------------------
*/

require_once __DIR__ . "/constants.php";

/* Database Credentials */

define('DB_HOST', 'localhost');
define('DB_NAME', 'locallift');
define('DB_USER', 'root');
define('DB_PASS', '');

/* Create Connection */

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/* Check Connection */

if ($conn->connect_error) {
    die("
        <h2 style='font-family:Arial;color:red;text-align:center;margin-top:50px;'>
            ❌ Database Connection Failed
        </h2>
        <p style='text-align:center;'>
            Error : " . $conn->connect_error . "
        </p>
    ");
}

/* UTF-8 Support */

$conn->set_charset("utf8mb4");

/* Set Timezone */

$conn->query("SET time_zone = '+05:30'");

/* Helper Function */

function clean($data)
{
    global $conn;

    return htmlspecialchars(
        mysqli_real_escape_string($conn, trim($data))
    );
}
?>