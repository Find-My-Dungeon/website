<?php
/*
Available routes:
GET /api/adventurers
GET /api/adventurers/{id}
POST /api/adventurers
PUT /api/adventurers/{id}
DELETE /api/adventurers/{id}
*/

// Include the model
require_once "../../data/adventurers.php";

header("Content-type: application/json");

// Get the HTTP method
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {
    // If there is no id, get all adventurers
    $adventurers = get_adventurers();

    // If there is no adventurers, return a 404 error
    if (!$adventurers) {
        http_response_code(404);

        echo json_encode([
            "error" => "noAdventurersFound",
            "message" => "Aucuns aventuriers trouvés"
        ]);
        
        exit;
    }

    // If there is at least one adventurer, return it
    echo json_encode($adventurers);
    exit;
}