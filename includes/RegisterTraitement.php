<?php
include '../Classes/Users.php';
include '../config/config.php';

if (isset($_POST["submit"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $user = new Users($conn);
    $registrationResult = $user->register($username, $email, $hashedPassword);

    if ($registrationResult) {
        echo "Registration successful!";
    } else {
        echo "Registration failed. Please try again.";
        
    }
}
