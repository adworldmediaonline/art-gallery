<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // This is a fake form submission, no data is being sent anywhere
    // Just redirect to thank you page

    header("Location: thank-you.php");
    exit();
} else {
    // If someone tries to access this file directly, redirect them to the contact page
    header("Location: contact.php");
    exit();
}
?>
