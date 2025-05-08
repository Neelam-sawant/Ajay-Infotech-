<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajayinfotech";

// Only process if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $subject = trim(htmlspecialchars($_POST['subject']));
    $message = trim(htmlspecialchars($_POST['message']));

    // Simple validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check DB connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute insert statement
    $stmt = $conn->prepare("INSERT INTO contact_info (name, email, subject, message) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        // Prepare and send email
        $to = 'shubham.ajayinfo@gmail.com';
        $email_subject = "New Form Submission";
        $email_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
        $headers = "From: $email\r\n" .
                   "Reply-To: shubham.ajayinfo@gmail.com\r\n";

        if (mail($to, $email_subject, $email_body, $headers)) {
            header("Location: index.php?success=true");
            exit();
        } else {
            echo "Message saved but failed to send email.";
        }
    } else {
        echo "Failed to save your message. Please try again.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
