<?php
/*
Available routes:
GET /api/adventures
GET /api/adventures/{id}
POST /api/adventures
PUT /api/adventures/{id}
DELETE /api/adventures/{id}
*/

// Include the model
require_once "../../data/adventures.php";

header("Content-type: application/json");

// Get the HTTP method
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {
    // If there is no id, get all adventures
    $adventures = get_adventures();

    // If there is no adventure, return a 404 error
    if (!$adventures) {
        http_response_code(404);
        
        echo json_encode([
            "error" => "noAdventuresFound",
            "message" => "Aucunes aventures trouvées"
        ]);

        exit;
    }

    // If there is at least one adventure, return it
    echo json_encode($adventures);
    exit;
}