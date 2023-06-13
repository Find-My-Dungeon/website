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

    $out_array = [];
    // Fill array with 3 times the same adventurer
    // with an id property starting at 0
    for ($i = 0; $i < 5; $i++) {
        $data_test["id"] = $i;
        array_push($out_array, $data_test);
    }

    return $out_array;
}

function adventurer_card($adventurer) {
    ?>
    <div class="px-4 py-3 rounded-xl border-2 border-blue-300 bg-blue-100 w-full md:basis-1/2 lg:basis-1/3">
        <div class="h-24 w-24 rounded-full overflow-hidden float-left mr-3">
            <img src="<?php echo $adventurer["avatar"]; ?>" alt="Avatar de <?php echo $adventurer["name"]; ?>" />
        </div>
        <div class="home-players-list-item-content">
            <h4 class="text-lg font-bold"><?php echo $adventurer["name"]; ?></h4>
            <p>Classe : <?php echo $adventurer["class"]; ?></p>
            <p>Espèce : <?php echo $adventurer["species"]; ?></p>
            <p>Niveau <?php echo $adventurer["level"]; ?></p>
            <p><?php echo $adventurer["bio"]; ?></p>
        </div>
    </div>
    <?php
}