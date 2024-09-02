<?php
// Ensure no output before this point
ob_start();

// Path to the counter file
$counter_file = 'counter.txt';

// Initialize the counter file if it doesn't exist
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, '0');
}

// Read the current count
$count = (int)file_get_contents($counter_file);

// Increment the count
$count++;

// Write the new count back to the file
file_put_contents($counter_file, $count);

// Clear any previous output
ob_end_clean();

// Return the count as a JSON response
header('Content-Type: application/json');
echo json_encode(['count' => $count]);
