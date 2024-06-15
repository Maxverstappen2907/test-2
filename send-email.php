<?php
// Get form data
$email = $_POST['email'];
$message = $_POST['message'];

// Set recipient email address
$to = 'maxgeraedts2907@gmail.com';

// Set email subject
$subject = 'New custom print request';

// Set email message
$message = "Email: $email\n\nMessage:\n$message";

// Set email headers
$headers = 'From: ' . $email . "\r\n" .
 'Reply-To: ' . $email . "\r\n" .
 'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo 'Your email has been sent successfully.';
} else {
    // Email failed to send
    echo 'There was an error sending your email.';
}
?>