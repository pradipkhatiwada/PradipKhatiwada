<?php
// Get the form data
$full_name = $_POST['full_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Send the email
$to = 'pradipkhatiwadaa@example.com'; // Replace with your email address
$subject = 'Contact Form Submission';
$body = "Full Name: $full_name\nAddress: $address\nEmail: $email\nPhone: $phone\nMessage: $message";
$headers = 'From: '. $email. "\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for contacting me!';
} else {
    echo "Error sending email. Please try again.";
}
?>