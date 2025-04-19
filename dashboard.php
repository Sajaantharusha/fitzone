<?php
//redirect to login if user is not logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
// Include database connection
include('db/config.php');
?>
Hola! Dashboard here!!