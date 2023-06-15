<?php
/*

Available routes:
GET /api/adventures
- Parameters:
  * maxNews: integer (default: 10)

*/

if (!isset($_SESSION)){session_start();}
require_once __DIR__ . '/../../utils/mysql.php';

// Include the model
require_once "../../data/news.php";

header("Content-type: application/json");

// Get the HTTP method
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {
    try {
        // If there is no id, get all news
        $news = get_news();
        $newsArray = [];
        
        $maxNews = $_GET["maxNews"] ?? 10;
        
        foreach ($news as $item) {
            $newsArray[] = [
                "title" => (string) $item->title,
                "link" => (string) $item->link,
                "description" => (string) $item->description,
                "pubDate" => (string) $item->pubDate
            ];

            if (count($newsArray) >= $maxNews || count($newsArray) >= count($news)) {
                break;
            }
        }
            
        // If there is at least one news, return it
        echo json_encode($newsArray);
        exit;
    } catch (Exception $e) {
        // If there is no news, return a 404 error
        http_response_code(404);

        echo json_encode([
            "error" => "noNewsFound",
            "message" => "Aucunes news trouvées"
        ]);

        exit;
    }
}