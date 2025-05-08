<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // or path to your PHPMailer if not using Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate input
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Setup PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_email@gmail.com';         // ✅ your Gmail address
        $mail->Password   = 'your_app_password';            // ✅ your 16-digit Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email setup
        $mail->setFrom('your_email@gmail.com', 'Ajay Infotech');
        $mail->addAddress('shubham.ajayinfo@gmail.com');    // recipient (you)
        $mail->addReplyTo($email, $name);

        $mail->isHTML(false); // set to true if you want HTML formatting
        $mail->Subject = "Contact Form Submission: $subject";
        $mail->Body    = "You received a new message from the contact form:\n\n" .
                         "Name: $name\n" .
                         "Email: $email\n" .
                         "Subject: $subject\n\n" .
                         "Message:\n$message";

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Failed to send message. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?>
