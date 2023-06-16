<?php
session_start();

require_once __DIR__ . '/../utils/mysql.php';

require_once __DIR__ . '/../data/adventurers.php';

$adventurer = get_adventurer($_GET["id"]);

if ((isset($_SESSION["id"]) && $_SESSION["id"] == $adventurer["id_user_adventurer"]) || (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"])) {
    delete_adventurer($_GET["id"]);
    header("Location: account");
    exit();
} else {
    header("Location: account");
    exit();
}