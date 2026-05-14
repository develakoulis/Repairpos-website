<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/pos/PHPMailer/src/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/pos/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/pos/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /contact");
    exit;
}

$name     = trim($_POST['name'] ?? '');
$business = trim($_POST['business'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$industry = trim($_POST['industry'] ?? '');
$message  = trim($_POST['message'] ?? '');

if ($name === '' || $business === '' || $email === '' || $message === '') {
    header("Location: /contact?error=missing");
    exit;
}

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'hello@repairpos.co';
    $mail->Password = '4Amon922';

    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('hello@repairpos.co', 'RepairPOS');

    $mail->addAddress('hello@repairpos.co');

    $mail->addReplyTo($email, $name);

    $mail->isHTML(false);

    $mail->Subject = 'New RepairPOS Enquiry from ' . $business;

    $mail->Body =
"New RepairPOS enquiry

Name: {$name}

Business: {$business}

Email: {$email}

Phone: {$phone}

Industry: {$industry}

Message:
{$message}
";

    $mail->send();

    header("Location: /contact?success=1");
    exit;

} catch (Exception $e) {

    file_put_contents(
        __DIR__ . '/mail-error-log.txt',
        date('Y-m-d H:i:s') . ' - ' . $mail->ErrorInfo . PHP_EOL,
        FILE_APPEND
    );

    header("Location: /contact?error=mail");
    exit;
}
