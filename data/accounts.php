<?php

function get_user($id) {
    require_once __DIR__ . '/../utils/mysql.php';

    $sql = "SELECT * FROM user WHERE id_user = :id";
    $parameters = array(':id' => $id);

    $result = execute_sql($sql, $parameters);

    return $result[0];
}

function save_user($id) {
    require_once __DIR__ . '/../utils/mysql.php';

    $fields = array('name_user', 'pseudo', 'email', 'password', 'avatar_user', 'localisation', 'presentation_user', 'social_media_1', 'social_media_2', 'social_media_3');

    foreach($fields as $field){
        if(!isset($_POST[$field])){
            $_POST[$field] = '';
        }
    }

    $sql = "UPDATE user SET name_user = :name_user,
                pseudo = :pseudo,
                email = :email,
                password = :password,
                avatar = :avatar_user,
                localisation = :localisation,
                presentation_user = :presentation_user,
                social_media_1 = :social_media_1,
                social_media_2 = :social_media_2,
                social_media_3 = :social_media_3
            WHERE id_user = :id";

    $parameters = array(':id' => $id,
        ':name_user' => $_POST['name_user'],
        ':pseudo' => $_POST['pseudo'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password'],
        ':avatar' => $_POST['avatar_user'],
        ':localisation' => $_POST['localisation'],
        ':presentation_user' => $_POST['presentation_user'],
        ':social_media_1' => $_POST['social_media_1'],
        ':social_media_2' => $_POST['social_media_2'],
        ':social_media_3' => $_POST['social_media_3']);

    $result = execute_sql($sql, $parameters);

    return $result;

}