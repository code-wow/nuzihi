<?php
session_start(); // Start the session.

// Define your username and password here for the example.
$valid_username = 'admin';
$valid_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve username and password from the form.
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the form's username and password match the ones defined above.
    if ($username == $valid_username && $password == $valid_password) {
        // Credentials are correct, set the session variable and redirect to the protected page.
        $_SESSION['user'] = $username;
        header('Location: protected_page.php');
        exit;
    } else {
        // Credentials are incorrect, set an error message.
        $error_message = 'Invalid username or password.';
    }
}
?>