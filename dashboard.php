<?php
//redirect to login if user is not logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
// Include database connection
include('db/config.php');

//Show unauthorized if the user role is not admin.
if ($_SESSION['user_role'] != 'admin') {
    echo "Unauthorized access!";
    exit();
}
?>
Hola! Dashboard here!!