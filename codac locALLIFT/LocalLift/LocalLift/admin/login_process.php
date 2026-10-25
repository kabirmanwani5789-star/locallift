<?php
session_start();
require_once("../config/database.php");

// Check request method
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.php");
    exit();
}

// Get form data
$email = clean($_POST['email']);
$password = clean($_POST['password']);

// Check database connection
if (!$conn) {
    die("Database Connection Failed!");
}

// Fetch admin by email
$sql = "SELECT * FROM admins WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query Error : " . mysqli_error($conn));
}

// Check admin exists
if (mysqli_num_rows($result) == 1) {

    $admin = mysqli_fetch_assoc($result);

    // Plain text password check
    if ($password == $admin['password']) {

        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['full_name'];
        $_SESSION['admin_email'] = $admin['email'];
        $_SESSION['admin_login'] = true;

        header("Location: dashboard.php");
        exit();

    } else {

        echo "<script>
                alert('Wrong Password');
                window.location='login.php';
              </script>";
    }

} else {

    echo "<script>
            alert('Admin Account Not Found');
            window.location='login.php';
          </script>";
}
?>