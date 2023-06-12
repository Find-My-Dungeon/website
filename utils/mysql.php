<?php
require_once '../config.php';

// Create connection
$conn = new mysqli($mysql_config['host'], $mysql_config['user'], $mysql_config['password'], $mysql_config['database'], $mysql_config['port']);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>