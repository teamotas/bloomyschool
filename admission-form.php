<?php
ob_start();
include_once('db.php');

if (isset($_POST['name'])) {

    // ===== RECAPTCHA VERIFY =====
    $secretKey = "6LdlEf0rAAAAAEC9ykgsw-WQWZ523c4hSjz_T-LF";

    $responseKey = $_POST['g-recaptcha-response'] ?? '';

    if (!$responseKey) {
        header("Location: apply-for-admission.php?error=Captcha missing");
        exit();
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => $secretKey,
        'response' => $responseKey
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = json_decode(curl_exec($ch));
    curl_close($ch);

    if (!$response || !$response->success) {
        header("Location: apply-for-admission.php?error=Captcha failed");
        exit();
    }

    // Inputs
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $program  = trim($_POST['program']);
    $message  = isset($_POST['message']) ? trim($_POST['message']) : '';

    /* ===== VALIDATION ===== */
    if ($name == "" || $email == "" || $phone == "" || $program == "") {
        header("Location: apply-for-admission.php?error=All fields required");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email");
    }

    if (!preg_match('/^[6-9]\d{9}$/', $phone)) {
        die("Invalid mobile number");
    }

    /* ===== ADMIN EMAIL ===== */
    $to = "crossings@makoons.com,adword@webiantdigital.in";
    $subject = "New Admission Enquiry ($name)";

    $body = "
    <h3>New Admission Enquiry</h3>
    <strong>Name:</strong> $name <br>
    <strong>Phone:</strong> $phone <br>
    <strong>Email:</strong> $email <br>
    <strong>Program:</strong> $program <br>
    <strong>Message:</strong> $message
    ";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: Bloomy Preschool <noreply@bloomy.com>\r\n";

    mail($to, $subject, $body, $headers);

    /* ===== USER AUTO REPLY ===== */
    $uto = $email;
    $usubject = "Thank you for your enquiry";

    $ubody = "
    Hi $name,<br><br>
    Thank you for your interest in our <strong>$program</strong> program.<br>
    Our team will contact you shortly.<br><br>
    Regards,<br>
    Bloomy Preschool
    ";

    $uheaders  = "MIME-Version: 1.0\r\n";
    $uheaders .= "Content-type:text/html;charset=UTF-8\r\n";
    $uheaders .= "From: Bloomy Preschool <noreply@bloomy.com>\r\n";

    mail($uto, $usubject, $ubody, $uheaders);

    /* ===== SMS ===== */
    sendmessage($name, $email, $phone, $program, $message);

    /* ===== DB (SAFE INSERT) ===== */
    $stmt = $conn->prepare("INSERT INTO admission_forms 
        (name, email, phone, program, message, created_at) 
        VALUES (?, ?, ?, ?, ?, ?)");

    $created_at = date("Y-m-d H:i:s");

    $stmt->bind_param("ssssss", $name, $email, $phone, $program, $message, $created_at);
    $stmt->execute();

    /* ===== REDIRECT ===== */
    header("Location: thank-you.php");
    exit();
}

/* ===== SMS FUNCTION ===== */
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