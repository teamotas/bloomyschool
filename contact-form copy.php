<?php

require 'config.php';

function redirectWithError($msg) {
    header("Location: contact-us.php?error=" . urlencode($msg));
    exit();
}


// ===== RECAPTCHA VERIFY =====
   $secretKey = "6LdlEf0rAAAAAEC9ykgsw-WQWZ523c4hSjz_T-LF"; // 🔴 put your secret key

$responseKey = $_POST['g-recaptcha-response'] ?? '';

if (!$responseKey) {
    redirectWithError("Captcha missing");
}

// Verify via cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'secret' => $secretKey,
    'response' => $responseKey
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$verifyResponse = curl_exec($ch);
curl_close($ch);

$response = json_decode($verifyResponse);

if (!$response || !$response->success) {
    redirectWithError("Captcha verification failed");
}


// Inputs
$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$program  = trim($_POST['program'] ?? '');
$message  = trim($_POST['message'] ?? '');

// ===== VALIDATION =====
if (!$name || !$email || !$phone || !$program) {
    redirectWithError("All fields are required");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectWithError("Invalid email");
}

if (!preg_match('/^[6-9]\d{9}$/', $phone)) {
    redirectWithError("Invalid phone number");
}

// if (strlen($message) < 5) {
//     redirectWithError("Message too short");
// }

// ===== SAVE TO DB =====
$stmt = $conn->prepare("INSERT INTO contact_forms (name, email, phone, program, message, created_at) VALUES (?, ?, ?, ?, ?, ?)");
$created_at = date("Y-m-d H:i:s");

$stmt->bind_param("ssssss", $name, $email, $phone, $program, $message, $created_at);
$stmt->execute();

// ===== ADMIN EMAIL =====
$to = "your@email.com"; // change this
$subject = "New Contact Enquiry ($name)";

$body = "
<h3>New Contact Enquiry</h3>
<strong>Name:</strong> $name <br>
<strong>Email:</strong> $email <br>
<strong>Phone:</strong> $phone <br>
<strong>Program:</strong> $program <br>
<strong>Message:</strong> $message
";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: Bloomy Preschool <noreply@bloomy.com>\r\n";

mail($to, $subject, $body, $headers);

// ===== USER AUTO REPLY =====
$uto = $email;
$usubject = "Thanks for contacting us";

$ubody = "
Hi $name,<br><br>
Thank you for reaching out regarding <strong>$program</strong>.<br>
We’ll get back to you shortly.<br><br>
Regards,<br>
Bloomy Preschool
";

$uheaders  = "MIME-Version: 1.0\r\n";
$uheaders .= "Content-type:text/html;charset=UTF-8\r\n";
$uheaders .= "From: Bloomy Preschool <noreply@bloomy.com>\r\n";

mail($uto, $usubject, $ubody, $uheaders);

// ===== SMS =====
sendmessage($name, $email, $phone, $program, $message);

// ===== SUCCESS =====
header("Location: thank-you.php");
exit();


// ===== SMS FUNCTION =====
function sendmessage($name, $email, $phone, $program, $message)
{
    $text = "Contact enquiry: Name:$name, Phone:$phone, Email:$email, Program:$program, Message:$message";
    $text = urlencode($text);

    $url = "http://www.smsjust.com/sms/user/urlsms.php?username=webiantdigital&pass=Varun@1234&senderid=MKSCRG&dest_mobileno=9810865370&message=".$text."&response=Y";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}

