<?php
$page_title = "Fiche personnage";
include_once '../includes/header.php';

require_once __DIR__ . '/../data/adventurers.php';

$adventurer = get_adventurer($_GET["id"]);

$full_name_user = trim($adventurer["first_name_user"] . " " . $adventurer["name_user"]);

?>
<body>
    <?php include_once '../includes/navbar.php'; ?>

    <main class="py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Personnage de <span class="text-purple-500 font-extrabold"><?= $full_name_user ?></span></h1>

        <div class="h-24 w-24 rounded-xl bg-zinc-300 flex items-center justify-center mx-auto float-left mr-6 mb-4 overflow-hidden">
            <?php
            if (isset($adventurer["avatar"])) {
                ?>
                <img src="<?= $adventurer["avatar"] ?>" alt="Avatar de <?= $adventurer["name_adventurer"] ?>" class="h-full w-full object-cover" />
                <?php
            } else {
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-circle-2">
                    <path d="M18 20a6 6 0 0 0-12 0" />
                    <circle cx="12" cy="10" r="4" />
                    <circle cx="12" cy="12" r="10" />
                </svg>
                <?php
            }
            ?>
        </div>

        <div class="flex flex-col mb-4">
            <span>Nom : <b><?= $adventurer["name_adventurer"] ?></b></span>
            <span>Espèce : <b><?= $adventurer["race"] ?></b></span>
            <span>Classe : <b><?= $adventurer["classe"] ?></b></span>
            <span>Niveau : <b><?= $adventurer["level"] ?></b></span>
        </div>

        <div class="mb-4">
            <b>Histoire et origine</b>
            <p class="whitespace-pre-wrap"><?= $adventurer["resume_adventurer"] ?></p>
        </div>

        <div class="hidden">
            <b>Notes</b>
            <p>
                Je suis stupide !
            </p>
        </div>

        <div class="flex flex-row flex-wrap gap-x-4 items-center justify-center sticky bottom-6 left-0 right-0">
            <a href="account?id=<?= $adventurer["id_user_adventurer"] ?>" class="flex flex-row gap-3 border-2 border-purple-500 rounded-md px-4 py-2 mt-4 bg-purple-500 hover:bg-purple-600 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-plus"><path d="M22 13V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h8"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/><path d="M19 16v6"/><path d="M16 19h6"/></svg>
                <span>Voir le profil de <?= $full_name_user ?></span>
            </a>

            <?php if (isset($_SESSION["id"]) && $_SESSION["id"] == $adventurer["id_user_adventurer"]) { ?>
                <a href="newCharacter?id=<?= $adventurer["id_adventurer"] ?>" class="flex flex-row gap-3 border-2 border-purple-500 rounded-md px-2 py-2 mt-4 bg-purple-500 hover:bg-purple-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-edit"><path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"/><polyline points="14 2 14 8 20 8"/><path d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z"/></svg>
                </a>

                <a href="deleteCharacter?id=<?= $adventurer["id_adventurer"] ?>" class="flex flex-row gap-3 border-2 border-red-500 rounded-md px-2 py-2 mt-4 bg-red-500 hover:bg-red-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                </a>
            <?php } ?>
        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>
</body>