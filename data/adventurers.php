<?php

function get_adventurers() {
    require_once __DIR__ . '/../utils/mysql.php';

    $sql = "SELECT * FROM adventurer";    
    $result = execute_sql($sql);

    return $result;
}

function get_adventurer($id) {
    require_once __DIR__ . '/../utils/mysql.php';

    $sql = "SELECT adventurer.*, user.name_user, user.first_name_user FROM adventurer JOIN user ON adventurer.id_user_adventurer = user.id_user WHERE id_adventurer = :id";
    $parameters = array(':id' => $id);
    $result = execute_sql($sql, $parameters);

    return $result[0];
}

function adventurer_card($adventurer) {
    ?>
    <a href="character?id=<?= $adventurer["id_adventurer"] ?>" class="px-4 py-3 rounded-xl border-2 border-blue-300 bg-blue-100 transition hover:border-blue-400 hover:bg-blue-200 hover:shadow-lg w-full md:basis-1/2 lg:basis-1/3">
        <div class="h-24 w-24 rounded-full overflow-hidden float-left mr-3">
            <img src="<?php echo $adventurer["avatar"]; ?>" alt="Avatar de <?php echo $adventurer["name_adventurer"]; ?>" />
        </div>
        <div class="home-players-list-item-content">
            <h4 class="text-lg font-bold"><?php echo $adventurer["name_adventurer"]; ?></h4>
            <p>Classe : <?php echo $adventurer["classe"]; ?></p>
            <p>Espèce : <?php echo $adventurer["race"]; ?></p>
            <p>Niveau <?php echo $adventurer["level"]; ?></p>
            <p><?php echo $adventurer["resume_adventurer"]; ?></p>
        </div>
    </a>
    <?php
}