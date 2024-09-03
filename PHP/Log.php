<?php
// Import config.php
require_once 'config.php';

// Add a new line to the Visits table with the current date
$date = date('Y-m-d');
$query = "INSERT INTO Visits (Date_Visited) VALUES ('$date')";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "New line added to the Visits table.";
} else {
    echo "Error adding line to the Visits table: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>