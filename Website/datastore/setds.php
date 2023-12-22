<?php

$file_name = $_GET['key'];

// Validate file name
if (!preg_match('/^[a-zA-Z0-9_-]+$/', $file_name)) {
    die("Invalid file name.");
}

$full_path = "./items/" . $file_name;

// Write data to file
$myfile = fopen($full_path, "w");
file_put_contents($full_path, $_GET['data']);

// Set appropriate content type for download
header("Content-type: text/plain");

// Read and output file content
echo file_get_contents($full_path);

?>