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

function adventure_card($adventure) {
    ?>
    <div class="px-4 py-3 rounded-xl border-2 border-purple-300 bg-purple-100 w-full md:basis-1/2 lg:basis-1/3">
        <h4 class="text-lg font-bold"><?php echo $adventure["genre"]; ?></h4>
        <p><?php echo $adventure["adventurers"]; ?> / <?php echo $adventure["maxAdventurers"]; ?> aventuriers</p>
        <p><?php echo $adventure["synopsis"]; ?></p>
    </div>
    <?php
}