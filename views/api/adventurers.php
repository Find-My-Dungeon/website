<?php
/*
Available routes:
GET /api/adventurers
GET /api/adventurers?id={id}
POST /api/adventurers
PUT /api/adventurers?id={id}
DELETE /api/adventurers?id={id}
*/

if (!isset($_SESSION)){session_start();}
require_once __DIR__ . '/../../utils/mysql.php';

// Include the model
require_once "../../data/adventurers.php";

header("Content-type: application/json");

// Get the HTTP method
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {
    // Get the id from the URL
    $id = $_GET["id"] ?? null;

    if ($id) {
        // If there is an id, get the adventurer
        $adventurer = get_adventurer($id);

        // If there is no adventurer, return a 404 error
        if (!$adventurer) {
            http_response_code(404);

            echo json_encode([
                "error" => "adventurerNotFound",
                "message" => "Aucun aventurier trouvé"
            ]);
            
            exit;
        }

        // If there is an adventurer, return it
        echo json_encode($adventurer);
        exit;
    }

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