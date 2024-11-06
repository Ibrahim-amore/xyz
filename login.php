<?php
session_start();

// Sample hardcoded credentials (in a real application, use a database)
$stored_username = "admin";
$stored_password = "password123"; // In production, use hashed passwords

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Check credentials
    if ($username === $stored_username && $password === $stored_password) {
        // Set session variable to mark user as logged in
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Redirect to dashboard page
        header("Location: dashboard.html");
        exit;
    } else {
        echo "<p style='color:red;'>Invalid username or password.</p>";
    }
}
?>
