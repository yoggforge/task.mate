<?php
$file = "counter.txt";   // File that stores the count

// If file doesn't exist, create it with 0
if (!file_exists($file)) {
    file_put_contents($file, "0");
}

// Read the current count
$count = (int)file_get_contents($file);

// Increment count
$count++;

// Save new count back to file
file_put_contents($file, $count);

// Display the count
echo "You are visitor number: " . $count;
?>
