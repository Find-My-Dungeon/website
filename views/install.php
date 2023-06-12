<?php

// If request is POST, check if given password is "fmd_1ns7all3r"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['password']) && $_POST['password'] === "fmd_1ns7all3r") {
        // If password is correct, load bdd.php file in utils
        require_once '../utils/bdd.php';

        // Redirect to login
        if (init_bdd()) {
            header('Location: /login.php');
        }
    }
}

$page_title = "Installation";
include_once '../includes/header.php';
?>
<body>
    <?php include_once '../includes/navbar.php'; ?>

    <main class="flex flex-col py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
        <h1 class="text-3xl font-bold text-center mb-4">Installation</h1>
        <span>Veuillez entrer le mot de passe d'administration pour débuter l'installation ou la mise à jour de la base de données.</span>

        <form class="flex flex-col w-full" action="install.php" method="post">
            <input type="password" class="border-2 border-zinc-300 rounded-md px-4 py-2 mt-4" placeholder="Mot de passe d'administration" />
            <input type="submit" class="border-2 border-red-500 rounded-md px-4 py-2 mt-4 bg-red-500 hover:bg-red-600 text-white" value="Valider" />
        </form>
    </main>
</body>