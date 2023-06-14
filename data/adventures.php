<?php

function get_adventures() {
    require_once __DIR__ . '/../utils/mysql.php';

    $sql = "SELECT * FROM fmd.story";    
    $result = execute_sql($sql);

    return $result;
}



function adventure_card($adventure) {
    ?>
    <div class="px-4 py-3 rounded-xl border-2 border-purple-300 bg-purple-100 w-full md:basis-1/2 lg:basis-1/3">
        <h4 class="text-lg font-bold"><?php echo $adventure["title"]; ?></h4>
        <h4 class="text-lg font-bold">Genre : <?php echo $adventure["genre"]; ?></h4>
        <p><?php echo $adventure["number_character"]; ?> / <?php echo $adventure["max_number_character"]; ?> aventuriers</p>
        <p><?php echo $adventure["resume_story"]; ?></p>
    </div>
    <?php
}