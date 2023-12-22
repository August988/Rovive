<?php

$zipFilePath = 'client.zip';

if (file_exists($zipFilePath)) {
    $fileSize = filesize($zipFilePath);
    $fileHandle = fopen($zipFilePath, 'rb');

    // Set the appropriate headers for the download
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="client.zip"');
    header('Content-Length: ' . $fileSize);

    // Check if the client sent a Range header
    if (isset($_SERVER['HTTP_RANGE'])) {
        list($start, $end) = explode('-', $_SERVER['HTTP_RANGE']);
        $start = intval($start);
        $end = $end === '' ? $fileSize - 1 : intval($end);
        $length = $end - $start + 1;

        // Set the 206 Partial Content status code
        http_response_code(206);

        // Set the Content-Range header
        header('Content-Range: bytes ' . $start . '-' . $end . '/' . $fileSize);
        header('Content-Length: ' . $length);

        // Seek to the requested position in the file
        fseek($fileHandle, $start);
    } else {
        $length = $fileSize;

        // Set the 200 OK status code
        http_response_code(200);
    }

    // Read and output the file in chunks
    $bufferSize = 1024 * 8;
    while (!feof($fileHandle) && $length > 0) {
        $chunkSize = min($length, $bufferSize);
        $data = fread($fileHandle, $chunkSize);
        echo $data;
        flush();
        $length -= $chunkSize;
    }

    // Close the file handle
    fclose($fileHandle);
} else {
    // Handle the case where the file does not exist
    echo 'File not found.';
}
