<?php

$dsname = $_GET['dsname'];
$file_name = $_GET['key'];
$data = $_GET['data'];

// Validate dsname and file_name
if (!preg_match('/^[a-zA-Z0-9_-]+$/', $dsname) || !preg_match('/^[a-zA-Z0-9_-]+$/', $file_name)) {
    die("Invalid dsname or file_name.");
}

$ds_dir = './ordereddatastore/' . $dsname;
if (!file_exists($ds_dir)) {
    mkdir($ds_dir, 0777, true);
}

$file_path = $ds_dir . '/' . $file_name;

// Write data to file
file_put_contents($file_path, $data);

header("Content-type: text/plain");

$files = glob($ds_dir . '/*');
$file_contents = [];

foreach ($files as $file) {
    if (is_file($file)) {
        $file_contents[] = file_get_contents($file);
    }
}

$json_array = json_encode($file_contents);

die($json_array);
