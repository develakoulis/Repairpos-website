<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'pos/PHPMailer/PHPMailer.php';
require_once 'pos/PHPMailer/SMTP.php';
require_once 'pos/PHPMailer/Exception.php';



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

  $mail->Username = 'billing@evans.com.au';
  $mail->Password = 'wpjwcvmmnfsglyrz';

  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom(
      'billing@evans.com.au',
      'RepairPOS'
  );

  $mail->addAddress('hello@repairpos.co');

  $mail->addReplyTo($email, $name);

  $mail->isHTML(true);

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
