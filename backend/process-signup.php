<?php
include('../db/config.php');
require_once('../utils/sanitize-inputs.php');

$encrypted_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sanitized_username = sanitize_input($_POST['username']);
$sanitized_email = sanitize_input($_POST['email']);
$sanitized_full_name = sanitize_input($_POST['full_name']);
$sanitized_phone_number = sanitize_input($_POST['phone_number']);
$sanitized_trainer_id = sanitize_input($_POST['trainer_id']);

$sql = "INSERT INTO users (full_name, trainer_id, phone, user_name, email, password_hash, role, created_at)
VALUES ('{$sanitized_full_name}', '{$sanitized_trainer_id}', '{$sanitized_phone_number}','{$sanitized_username}', '{$sanitized_email}', '{$encrypted_password}', 'customer', NOW())";

if ($conn->query($sql) === TRUE) {
    header("Location: ../login.php?signup=success");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();