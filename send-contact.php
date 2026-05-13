<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact");
    exit;
}

$name     = trim($_POST['name'] ?? '');
$business = trim($_POST['business'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$industry = trim($_POST['industry'] ?? '');
$message  = trim($_POST['message'] ?? '');

if ($name === '' || $business === '' || $email === '' || $message === '') {
    header("Location: contact?error=missing");
    exit;
}

$to = "hello@repairpos.co";
$subject = "New RepairPOS Enquiry from " . $business;

$body =
"New RepairPOS enquiry\n\n" .
"Name: {$name}\n" .
"Business: {$business}\n" .
"Email: {$email}\n" .
"Phone: {$phone}\n" .
"Industry: {$industry}\n\n" .
"Message:\n{$message}\n";

$headers  = "From: RepairPOS Website <no-reply@repairpos.co>\r\n";
$headers .= "Reply-To: {$email}\r\n";

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    header("Location: contact?success=1");
    exit;
}

header("Location: contact?error=mail");
exit;
