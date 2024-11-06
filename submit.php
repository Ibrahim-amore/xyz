<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $data = "Name: $name, Email: $email, Password: $hashedPassword\n";
    file_put_contents("users.txt", $data, FILE_APPEND);

    echo "Registration successful!";
}
?>