<?php
$page_title = "Fiche personnage";
include_once '../includes/header.php';

require_once __DIR__ . '/../data/adventurers.php';

$adventurers = get_user_adventurers($_SESSION["id"]);
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
    </main>

    <?php include_once '../includes/footer.php'; ?>
</body>