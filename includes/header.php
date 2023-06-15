<?php
if (!isset($_SESSION)){session_start();}
require_once __DIR__ . '/../utils/mysql.php';
?>

<!DOCTYPE html>
<head lang="fr">
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>

    <title><?php echo isset($page_title) ? $page_title . " - FMD" : "FMD"; ?></title>
</head>