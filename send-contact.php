<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $business = htmlspecialchars($_POST['business']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $industry = htmlspecialchars($_POST['industry']);
    $message = htmlspecialchars($_POST['message']);

    $to = "hello@repairpos.co";
    $subject = "New RepairPOS Enquiry";

    $body = "
Name: $name

Business: $business

Email: $email

Phone: $phone

Industry: $industry

Message:
$message
";

    $headers = "From: no-reply@repairpos.co\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)) {
        header("Location: contact?success=1");
        exit;
    } else {
        echo "Mail failed.";
    }

}
?>
