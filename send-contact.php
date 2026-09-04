<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'pos/PHPMailer/PHPMailer.php';
require_once 'pos/PHPMailer/SMTP.php';
require_once 'pos/PHPMailer/Exception.php';

$logFile = __DIR__ . '/mail-error-log.txt';
$smtpLogFile = __DIR__ . '/smtp-debug-log.txt';

function repairpos_log($message) {
    global $logFile;
    file_put_contents(
        $logFile,
        date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL,
        FILE_APPEND
    );
}


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    repairpos_log('Invalid request method: ' . $_SERVER["REQUEST_METHOD"]);
    header("Location: /contact");
    exit;
}

$name     = trim($_POST['name'] ?? '');
$business = trim($_POST['business'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$industry = trim($_POST['industry'] ?? '');
$message  = trim($_POST['message'] ?? '');

repairpos_log('POST received for business: ' . $business . ' / email: ' . $email);

if ($name === '' || $business === '' || $email === '' || $message === '') {
    repairpos_log('Missing required fields.');
    header("Location: /contact?error=missing");
    exit;
}

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) use ($smtpLogFile) {
        file_put_contents(
            $smtpLogFile,
            date('Y-m-d H:i:s') . " [$level] " . $str . PHP_EOL,
            FILE_APPEND
        );
    };

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'billing@evans.com.au';
    $mail->Password = 'wpjwcvmmnfsglyrz';

    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('billing@evans.com.au', 'RepairPOS');
    $mail->addAddress('hello@repairpos.co');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New RepairPOS Enquiry from ' . $business;

    $mail->Body = "
        <h2>New RepairPOS enquiry</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Business:</strong> {$business}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Industry:</strong> {$industry}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    ";

    repairpos_log('Attempting send.');

    $mail->send();

    repairpos_log('Mail sent successfully.');

    header("Location: /contact?success=1");
    exit;

} catch (Exception $e) {

    repairpos_log('PHPMailer exception: ' . $e->getMessage());
    repairpos_log('PHPMailer ErrorInfo: ' . $mail->ErrorInfo);

    header("Location: /contact?error=mail");
    exit;
}
