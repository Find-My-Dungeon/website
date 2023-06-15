<?php

function get_adventures() {
    require_once __DIR__ . '/../utils/mysql.php';

    $sql = "SELECT * FROM story";    
    $result = execute_sql($sql);

    return $result;
}



function adventure_card($adventure) {
    ?>
    <div class="px-4 py-3 rounded-xl border-2 border-purple-300 bg-purple-100 transition hover:border-purple-400 hover:bg-purple-200 hover:shadow-lg w-full md:basis-1/2 lg:basis-1/3">
        <h4 class="text-lg font-bold"><?php echo $adventure["title"]; ?></h4>
        <h4 class="text-lg font-bold">Genre : <?php echo $adventure["genre"]; ?></h4>
        <p><?php echo $adventure["number_adventurer"]; ?> / <?php echo $adventure["max_number_adventurer"]; ?> aventuriers</p>
        <p><?php echo $adventure["resume_story"]; ?></p>
    </div>
    <?php
}