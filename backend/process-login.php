<?php
include('../db/config.php');
require_once('../utils/sanitize-inputs.php');

//login user with username and passwordd then redirect to dashboard.php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sanitized_username = sanitize_input($username);
$sanitized_password = sanitize_input($password);
$sql = "SELECT * FROM users WHERE user_name = '{$sanitized_username}'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // User found, verify password
    if (!password_verify($sanitized_password, $row['password_hash'])) {
        // Password does not match, redirect back to login with error message
        header("Location: ../login.php?error=invalid_credentials");
        exit();
    }

    // User found, set session variables and redirect to dashboard
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['role'] = $row['role'];
    if($row['role'] == 'admin') {
        header("Location: ../admin-dashboard.php");
    } else {
        header("Location: ../#Services");
    }
    
    exit();
}