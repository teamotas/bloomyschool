<?php
date_default_timezone_set("Asia/Kolkata");

// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "bloomy";

$adminurl="http://localhost/zips/bloomy/admin/"; // While online the site please blank the site variable



// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: set charset (recommended)
$conn->set_charset("utf8mb4");



