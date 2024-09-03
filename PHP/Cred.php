<?php
// Import the config file
require_once 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the app.js file
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the username and password to the accounts table
    $query = "INSERT INTO accounts (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);    

    exit;
}
