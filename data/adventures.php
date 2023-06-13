<?php

function get_adventures() {
    $data_test = [
        "genre" => "Fantaisie",
        "adventurers" => 4,
        "maxAdventurers" => 6,
        "synopsis" => "[présentation rapide du synopsis de la campagne]"
    ];

    // Return 3 adventures
    return array_fill(0, 3, $data_test);
}