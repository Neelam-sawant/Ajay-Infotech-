<?php
$servername = "localhost";  
$username = "u811507687_Sriniwas_07";  
$password = "Sriniwas@008";  
$dbname = "u811507687_testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare SQL statement
    $sql = "INSERT INTO quotes_info (name, email, service, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if the statement preparation is successful
    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    // Bind parameters and execute
    $stmt->bind_param("ssss", $name, $email, $service, $message);

    // Check if execution is successful
    if ($stmt->execute()) {
        // Email parameters:
        $to = 'sriniwas.ajayinfo@gmail.com';
        $email_subject = "New Form Submission: $service";  // Email subject includes the service
        $email_message = "Name: $name\nEmail: $email\nService: $service\nMessage: $message";
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
    } else {
        echo "Failed to insert data into the database.";
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>
