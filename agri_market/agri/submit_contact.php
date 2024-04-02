<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = "nasrinkhanmitu.pciu@email.com"; // Replace with your email address

    // Set email subject
    $subject = "New Message from Agricultural Market Contact Form";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "<p>Thank you for contacting us! We will get back to you shortly.</p>";
    } else {
        // Error sending email
        echo "<p>Sorry, an error occurred while sending your message. Please try again later.</p>";
    }
} else {
    // Redirect to contact page if accessed directly without form submission
    header("Location: contact.php");
    exit();
}
?>
