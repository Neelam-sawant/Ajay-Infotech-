<?php
$servername = "localhost";  // This is your MySQL hostname
$username = "u811507687_Sriniwas_07";  // Your database username
$password = "Sriniwas@008";  // Your database password
$dbname = "u811507687_testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Prepare the SQL statement
$sql = "INSERT INTO contact_info (name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Check if the statement preparation is successful
if (!$stmt) {
    die("Statement preparation failed: " . $conn->error);
}

// Bind parameters and execute
$stmt->bind_param("ssss", $name, $email, $subject, $message);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$stmt->execute();

// Email sending section starts:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email parameters:
    $to = 'sriniwas.ajayinfo@gmail.com';
    $email_subject = "New Form Submission";  // Email subject is set here
    $email_message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";  // Include all form data
    $headers = 'From: sriniwas.ajayinfo@gmail.com' . "\r\n" .
               'Reply-To: sriniwas.ajayinfo@gmail.com' . "\r\n";

    // Send the email:
    if (mail($to, $email_subject, $email_message, $headers)) {
        // Redirect to contact.html with success flag
        header("Location: index.php?success=true");
        exit();  // Stop script execution after redirection
    } else {
        echo "Failed to send email.";
    }
}
// Close the statement and connection
$stmt->close();
$conn->close();
?>