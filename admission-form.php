<?php
require 'config.php';

function redirectWithError($message) {
    header("Location: admission.php?error=" . urlencode($message));
    exit();
}

// Inputs
$child_name  = trim($_POST['child_name'] ?? '');
$child_age   = trim($_POST['child_age'] ?? '');
$father_name = trim($_POST['father_name'] ?? '');
$mother_name = trim($_POST['mother_name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$phone       = trim($_POST['phone'] ?? '');

// Validation
if (!$child_name || !$child_age || !$father_name || !$mother_name || !$email || !$phone) {
    redirectWithError("All fields are required");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectWithError("Invalid email");
}

if (!preg_match('/^[6-9]\d{9}$/', $phone)) {
    redirectWithError("Invalid phone number");
}

if (!is_numeric($child_age) || $child_age < 1 || $child_age > 10) {
    redirectWithError("Invalid child age");
}

// Insert
$stmt = $conn->prepare("INSERT INTO admission_forms 
(child_name, child_age, father_name, mother_name, email, phone) 
VALUES (?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sissss", $child_name, $child_age, $father_name, $mother_name, $email, $phone);

if ($stmt->execute()) {
    header("Location: apply-for-admission.php?success=1");
} else {
    redirectWithError("Something went wrong");
}
exit();