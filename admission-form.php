<?php

ob_start();

include_once('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


// =====================================
// 🔁 MODE SWITCH
// true  = LOCAL (Mailtrap)
// false = LIVE  (Gmail)
// =====================================
$isLocal = true;


// =====================================
// 🔁 CAPTCHA KEYS
// =====================================
if ($isLocal) {

    // LOCAL CAPTCHA SECRET KEY
    $secretKey = "6LfaGAEsAAAAACU2A3RZtvwKQVPNfOyBFOkGwHCk";

} else {

    // LIVE CAPTCHA SECRET KEY
    $secretKey = "6LfPgsAsAAAAAJ6XDMZzzBWaeOmRl0XLI8mDME-m";
}


// =====================================
// 🔁 REQUEST CHECK
// =====================================
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit("Invalid Request");
}


// =====================================
// 🔁 CAPTCHA VERIFY
// =====================================
$responseKey = $_POST['g-recaptcha-response'] ?? '';

if (!$responseKey) {

    header("Location: apply-for-admission.php?error=Captcha missing");
    exit();
}


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'secret'   => $secretKey,
    'response' => $responseKey
]));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$verifyResponse = curl_exec($ch);

curl_close($ch);

$response = json_decode($verifyResponse);


if (!$response || !$response->success) {

    header("Location: apply-for-admission.php?error=Captcha verification failed");
    exit();
}


// =====================================
// 🔁 INPUTS
// =====================================
$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$program  = trim($_POST['program'] ?? '');
$message  = trim($_POST['message'] ?? '');


// =====================================
// 🔁 VALIDATION
// =====================================
if (!$name || !$email || !$phone || !$program) {

    header("Location: apply-for-admission.php?error=All fields required");
    exit();
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    header("Location: apply-for-admission.php?error=Invalid email");
    exit();
}


if (!preg_match('/^[6-9]\d{9}$/', $phone)) {

    header("Location: apply-for-admission.php?error=Invalid phone number");
    exit();
}


// =====================================
// 🔁 SAFE VALUES
// =====================================
$safe_name     = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email    = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_phone    = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safe_program  = htmlspecialchars($program, ENT_QUOTES, 'UTF-8');

$safe_message = nl2br(
    htmlspecialchars($message, ENT_QUOTES, 'UTF-8')
);


// =====================================
// 🔁 ADMIN EMAIL
// =====================================
$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->SMTPAuth = true;


    // =====================================
    // 🔁 LOCAL SMTP (MAILTRAP)
    // =====================================
    if ($isLocal) {

        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->Username   = 'a894b85f463a05';
        $mail->Password   = '14dac8f694d338';
        $mail->Port       = 2525;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    } else {

        // =====================================
        // 🔁 LIVE SMTP (GMAIL)
        // =====================================

        $mail->Host       = 'smtp.gmail.com';
        $mail->Username   = 'info@bloomyschools.com';
        $mail->Password   = 'YOUR_GMAIL_APP_PASSWORD';
        $mail->Port       = 587;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    }


    // =====================================
    // 🔁 EMAIL SETTINGS
    // =====================================
    $mail->setFrom('info@bloomyschools.com', 'Bloomy Schools');

    $mail->addAddress('crossings@makoons.com');
    $mail->addAddress('adword@webiantdigital.in');

    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);

    $mail->Subject = "New Admission Enquiry | {$safe_name}";


    // =====================================
    // 🔁 EMAIL BODY
    // =====================================
    $mail->Body = "
        <h2>New Admission Enquiry</h2>

        <p>
            <strong>Name:</strong> {$safe_name}
        </p>

        <p>
            <strong>Email:</strong> {$safe_email}
        </p>

        <p>
            <strong>Phone:</strong> {$safe_phone}
        </p>

        <p>
            <strong>Program:</strong> {$safe_program}
        </p>

        <p>
            <strong>Message:</strong><br>
            {$safe_message}
        </p>
    ";


    $mail->AltBody = "
        Name: $name
        Email: $email
        Phone: $phone
        Program: $program
        Message: $message
    ";


    // SEND ADMIN MAIL
    $mail->send();

} catch (Exception $e) {

    header("Location: apply-for-admission.php?error=Mail sending failed");

    exit();
}


// =====================================
// 🔁 USER AUTO REPLY
// =====================================
$userMail = new PHPMailer(true);

try {

    $userMail->isSMTP();

    $userMail->SMTPAuth = true;


    if ($isLocal) {

        $userMail->Host       = 'sandbox.smtp.mailtrap.io';
        $userMail->Username   = 'a894b85f463a05';
        $userMail->Password   = '14dac8f694d338';
        $userMail->Port       = 2525;

        $userMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    } else {

        $userMail->Host       = 'smtp.gmail.com';
        $userMail->Username   = 'info@bloomyschools.com';
        $userMail->Password   = 'YOUR_GMAIL_APP_PASSWORD';
        $userMail->Port       = 587;

        $userMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    }


    $userMail->setFrom('info@bloomyschools.com', 'Bloomy Schools');

    $userMail->addAddress($email, $name);

    $userMail->isHTML(true);

    $userMail->Subject = "Thank you for your enquiry";


    $userMail->Body = "
        Hi {$safe_name},<br><br>

        Thank you for your interest in our 
        <strong>{$safe_program}</strong> program.<br><br>

        Our team will contact you shortly.<br><br>

        Regards,<br>
        Bloomy Schools
    ";


    $userMail->send();

} catch (Exception $e) {

    // Ignore user mail failure
}


// =====================================
// 🔁 SMS
// =====================================
sendmessage(
    $name,
    $email,
    $phone,
    $program,
    $message
);


// =====================================
// 🔁 DB INSERT
// =====================================
$stmt = $conn->prepare("
    INSERT INTO admission_forms
    (
        name,
        email,
        phone,
        program,
        message,
        created_at
    )
    VALUES (?, ?, ?, ?, ?, ?)
");


$created_at = date("Y-m-d H:i:s");


$stmt->bind_param(
    "ssssss",
    $name,
    $email,
    $phone,
    $program,
    $message,
    $created_at
);

$stmt->execute();


// =====================================
// 🔁 SUCCESS
// =====================================
header("Location: thank-you.php");
exit();


// =====================================
// 🔁 SMS FUNCTION
// =====================================
function sendmessage($name, $email, $phone, $program, $message)
{
    $text = "New enquiry: Name:$name, Phone:$phone, Email:$email, Program:$program, Message:$message";

    $text = urlencode($text);

    $url = "http://www.smsjust.com/sms/user/urlsms.php?username=webiantdigital&pass=Varun@1234&senderid=MKSCRG&dest_mobileno=9810865370&message=".$text."&response=Y";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_exec($ch);

    curl_close($ch);
}
?>