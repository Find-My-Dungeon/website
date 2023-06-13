<?php
// Sample Hello world PHP JSON API

// Set the content type to JSON
header('Content-type: application/json');

// Print the JSON
echo json_encode([
    'status' => 'success',
    'message' => 'Hello world !'
]);