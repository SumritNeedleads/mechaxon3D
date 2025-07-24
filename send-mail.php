<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to      = "kabhinit@emazetechnologies.com";  // Replace with your actual email
    $subject = "New Contact Form Submission";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again.'); history.back();</script>";
    }
} else {
    echo "Invalid Request.";
}
?>
