<?php
require_once __DIR__ . '/../config.php';

// Create connection
// $conn = new mysqli($mysql_config['host'], $mysql_config['user'], $mysql_config['password'], $mysql_config['database'], $mysql_config['port']);

// Use pdo
function get_pdo() {
  global $mysql_config;

  $dsn = "mysql:host={$mysql_config['host']};dbname={$mysql_config['database']};port={$mysql_config['port']};charset=utf8mb4";
  $username = $mysql_config['user'];
  $password = $mysql_config['password'];

  try {
      $pdo = new PDO($dsn, $username, $password);
      // set the PDO error mode to exception
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // select the database
      $pdo->query("use {$mysql_config['database']};");

      return $pdo;
  } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
}

function execute_sql($sql, $parameters = null) {
  $pdo = get_pdo();

  if ($pdo) {
    $stmt = $pdo->prepare($sql);

    if (isset($parameters)) {
      $stmt->execute($parameters);
    } else {
      $stmt->execute();
    }

    return $stmt->fetchAll();
  }
}

?>