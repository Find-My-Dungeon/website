<?php

function get_adventurers() {
    require_once __DIR__ . '/../utils/mysql.php';

    $sql = "SELECT * FROM fmd.character";    
    $result = execute_sql($sql);

    return $result;
}

function adventurer_card($adventurer) {
    ?>
    <div class="px-4 py-3 rounded-xl border-2 border-blue-300 bg-blue-100 w-full md:basis-1/2 lg:basis-1/3">
        <div class="h-24 w-24 rounded-full overflow-hidden float-left mr-3">
            <img src="<?php echo $adventurer["avatar"]; ?>" alt="Avatar de <?php echo $adventurer["name_character"]; ?>" />
        </div>
        <div class="home-players-list-item-content">
            <h4 class="text-lg font-bold"><?php echo $adventurer["name_character"]; ?></h4>
            <p>Classe : <?php echo $adventurer["classe"]; ?></p>
            <p>Espèce : <?php echo $adventurer["race"]; ?></p>
            <p>Niveau <?php echo $adventurer["level"]; ?></p>
            <p><?php echo $adventurer["resume_character"]; ?></p>
        </div>
    </div>
    <?php
}