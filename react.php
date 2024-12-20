<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = "ankit4562a@gmail.com";
    $subject = "Message from " . $fullname;
    $body = "You have received a new message from " . $fullname . " (" . $email . ").\n\nMessage:\n" . $message;

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for reaching out! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>