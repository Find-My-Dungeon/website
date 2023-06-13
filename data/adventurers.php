<?php

function get_adventurers() {
    $data_test = [
        "name" => "PHiBi",
        "class" => "yipeee",
        "species" => "TBH",
        "level" => "69",
        "avatar" => "https://pbs.twimg.com/profile_images/1662799693653442560/xvyy0ufj_400x400.jpg",
        "bio" => "Je suis un testeur de FMD",
    ];

    // Return 3 adventurers
    return array_fill(0, 3, $data_test);
}