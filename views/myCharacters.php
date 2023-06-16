<?php
$page_title = "Fiche personnage";
include_once '../includes/header.php';

require_once __DIR__ . '/../data/adventurers.php';

$adventurers = get_user_adventurers($_SESSION["id"]);

$delete_adventurers = delete_user_adventurers($_SESSION["id"]);

?>
<body>
    <?php include_once '../includes/navbar.php'; ?>

    <main class="py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
        <div class="flex flex-col mb-4">
            <h1 class="text-2xl font-bold">Vos <span class="text-purple-500 font-extrabold">personnages</span></h1>
            <span class="text-purple-500 font-extrabold"><?php echo count($adventurers); ?>/3</span>
        </div>

        <?php
            if (count($adventurers) == 0) {
                echo "<p class='mb-8'>Aucun.e aventurier.ière n'a été trouvé.e</p>";
            }
        ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
            <?php foreach ($adventurers as $adventurer) { adventurer_card($adventurer); } ?>

            <a href="newCharacter" class="flex items-center justify-center px-4 py-12 rounded-xl border-2 border-blue-300 bg-blue-100 transition hover:border-blue-400 hover:bg-blue-200 hover:shadow-lg w-full md:basis-1/2 lg:basis-1/3">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><line x1="12" x2="12" y1="5" y2="19"/><line x1="5" x2="19" y1="12" y2="12"/></svg>
            </a>
        </div>
        <button class="flex flex-row items-center gap-2 bg-purple-500 hover:bg-purple-600 focus:bg-purple-700 active:bg-purple-800 text-white font-bold py-2 px-4 rounded-lg" type="submit">
            <span>Modifier</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
        </button>
    </main>

    <?php include_once '../includes/footer.php'; ?>
</body>