<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "christian.almayda.dev@gmail.com"; // Change this to your email address
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $subject = "New Contact Us Message from $name";
    $headers = "From: $email";
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (mail($recipient, $subject, $message, $headers)) {
            echo "Thank you for contacting us, $name! We will get back to you shortly.";
        } else {
            echo "Oops! Something went wrong while sending your message.";
        }
    } else {
        echo "Invalid email format. Please provide a valid email address.";
    }
}
?>
