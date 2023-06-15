<?php

function get_user($id) {
    require_once __DIR__ . '/../utils/mysql.php';

    $sql = "SELECT * FROM user WHERE id_user = :id";
    $parameters = array(':id' => $id);

    $result = execute_sql($sql, $parameters);

    return $result[0];
}