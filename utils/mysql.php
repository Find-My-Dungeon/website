<?php
require_once __DIR__ . '/../config.php';

// Create connection
// $conn = new mysqli($mysql_config['host'], $mysql_config['user'], $mysql_config['password'], $mysql_config['database'], $mysql_config['port']);

// Use pdo
try {
  $pdo = new PDO("mysql:host=".$mysql_config['host'].";dbname=".$mysql_config['database'].";port=".$mysql_config['port'], $mysql_config['user'], $mysql_config['password']);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  global $pdo;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function execute_sql($sql, $parameters) {
  global $pdo;
  $stmt = $pdo->prepare($sql);
  $stmt->execute($parameters);
  return $stmt->fetchAll();
}

?>