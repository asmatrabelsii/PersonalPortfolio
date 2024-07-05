<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate data (you can add more robust validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle empty fields
        echo "Please fill in all fields.";
        exit;
    }

    // Email recipient (replace with your email address)
    $to = "trabelsi7asma@gmail.com";
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully. Thank you!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
