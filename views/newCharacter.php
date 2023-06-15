<?php
$page_title = "Nouvelle fiche utilisateur";
include_once '../includes/header.php';
var_dump($_SESSION);
die("toto");    
?><body>
    <?php include_once '../includes/navbar.php'; ?>

    <main class="flex flex-col py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
        <form class="flex flex-col gap-4 w-full mx-auto" action="newCharacter" method="POST">
            <h1 class="text-2xl font-bold">Personnage de <span class="text-purple-500 font-extrabold">User</span></h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 w-full pb-2">
                <div class="flex flex-col gap-2">
                    <label for="name_adventurer">Nom du personnage</label>
                    <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="name" id="name" placeholder="ex. PhiBi" required />
                </div>
                <div class="flex flex-col gap-2">
                    <label for="classe">Classe</label>
                    <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="class" id="class" placeholder="ex. UserFactory" required />
                </div>
                <div class="flex flex-col gap-2">
                    <label for="race">Espèce</label>
                    <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="species" id="species" placeholder="ex. public static void" required />
                </div>
                <div class="flex flex-col gap-2">
                    <label for="level">Niveau</label>
                    <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="number" name="level" id="level" placeholder="ex. 69" required min="0" max="20" />
                </div>
                <div class="flex flex-col gap-2 md:col-span-2">
                    <label for="avatar">Avatar</label>
                    <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="avatar" id="avatar" placeholder="URL de l'avatar du personnage" required />
                </div>
                <div class="flex flex-col gap-2">
                    <label for="resume_adventurer">Histoire et origine</label>
                    <textarea class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" name="bio" id="bio" placeholder="" required></textarea>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="quote">Notes (facultatif)</label>
                    <textarea class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" name="quote" id="quote" placeholder="ex. Je suis stupide !"></textarea>
                </div>
            </div>

            <button class="bg-purple-500 hover:bg-purple-600 focus:bg-purple-700 active:bg-purple-800 text-white font-bold py-2 px-4 rounded-lg w-1/2 mx-auto" type="submit">Créer</button>
        </form>
    </main>


<?php 

    

    if (
        !isset($_POST['name_adventurer'])
        || !isset($_POST['classe'])
        || !isset($_POST['race'])
        || !isset($_POST['avatar'])
        || !isset($_POST['resume_adventurer'])
        )
    {
        echo 'Des informations obligatoires sont manquantes.';
    }

    $name_adventurer = htmlentities(trim($_POST['name_adventurer']));
    $classe = $_POST['classe'];
    $race = $_POST['race'];
    $avatar = $_POST['avatar'];
    $resume_adventurer = $_POST['resume_adventurer'];


    require_once __DIR__ . '/../utils/mysql.php';

    $sql = "INSERT INTO `adventurer` 
        (`name_adventurer`, `classe`, `race`, `level`, `avatar`,  `resume_adventurer`, `id_user_adventurer`) 
        VALUES (':name_adventurer', ':classe', ':race', ':level', ':avatar', ':resume_adventurer', ':id_user_adventurer')";   
    $result = execute_sql($sql);

    return $result;
    
?>

    <?php include_once '../includes/footer.php'; ?>
</body>