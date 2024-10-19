<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email (configure mail server correctly)
    $to = 'darshan00shew@gmail.com';
    $subject = 'New Contact Message from Portfolio Website';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message. Please try again later.';
    }
}
?>
