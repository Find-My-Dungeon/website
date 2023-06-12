<?php
$page_title = "Fiche personnage";
include_once '../includes/header.php';
?>
<body>
    <?php include_once '../includes/navbar.php'; ?>

    <main class="py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Personnage de <span class="text-purple-500 font-extrabold">User</span></h1>

        <div class="h-24 w-24 rounded-xl bg-zinc-300 flex items-center justify-center mx-auto float-left mr-6 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-circle-2">
                <path d="M18 20a6 6 0 0 0-12 0" />
                <circle cx="12" cy="10" r="4" />
                <circle cx="12" cy="12" r="10" />
            </svg>
        </div>

        <div class="flex flex-col mb-4">
            <span>Nom : <b>PhiBi</b></span>
            <span>Espèce : <b>public static void</b></span>
            <span>Classe : <b>UserFactory</b></span>
            <span>Niveau : <b>69</b></span>
        </div>

        <div class="mb-4">
            <b>Histoire et origine</b>
            <p>
                Franchement je sais pas trop quoi dire ici. Alors j'ai eu une idée que je suis sûr.e que vous allez tous adorer !<br><br>
                
                Voici un lorem ipsum :<br><br>
                
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <div>
            <b>Notes</b>
            <p>
                Je suis stupide !
            </p>
        </div>

        <div class="flex flex-row items-center justify-center sticky bottom-6 left-0 right-0">
            <button class="flex flex-row gap-3 border-2 border-purple-500 rounded-md px-4 py-2 mt-4 bg-purple-500 hover:bg-purple-600 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-plus"><path d="M22 13V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h8"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/><path d="M19 16v6"/><path d="M16 19h6"/></svg>
                <span>Contacter User</span>
            </button>
        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>
</body>