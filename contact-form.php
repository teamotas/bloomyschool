<?php

require 'config.php';

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$program = $_POST['program'] ?? '';
$message = trim($_POST['message'] ?? '');

// Validation
if (empty($name) || empty($email) || empty($phone) || empty($program) || empty($message)) {
    die("All fields are required");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email");
}

if (!preg_match('/^[6-9]\d{9}$/', $phone)) {
    die("Invalid phone number");
}

if (strlen($message) < 5) {
    die("Message too short");
}

// Insert (prepared)
$stmt = $conn->prepare("INSERT INTO contact_forms (name, email, phone, program, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $program, $message);
$stmt->execute();

header("Location: thank-you.php");
exit();