<?php

$page_title = "Profil";

include_once '../includes/header.php';

require_once __DIR__ . '/../data/accounts.php';
require_once __DIR__ . '/../data/adventurers.php';

$account = get_user($_GET["id"] ?? $_SESSION["id"]);

// $full_name_user will contain both $account["first_name_user"] and $account["name_user"] if they are not empty
$full_name_user = trim($account["first_name_user"] . " " . $account["name_user"]);

?>
<body>
    <?php include_once '../includes/navbar.php'; ?>

    <main class="flex flex-col py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-lg mx-auto">
        <div class="flex flex-col gap-4 w-full mx-auto">
            <div class="flex flex-row gap-4 justify-between">
                <h1 class="text-2xl font-bold">Profil de <span class="text-purple-500 font-extrabold"><?= $full_name_user ?></span></h1>
                
                <?php if (isset($_SESSION["id"]) && $_SESSION["id"] == $account["id_user"]) { ?>
                    <a href="myAccount" class="flex flex-row items-center gap-2 bg-purple-500 hover:bg-purple-600 focus:bg-purple-700 active:bg-purple-800 text-white font-medium py-1 px-2 rounded-lg" type="submit">
                        <span>Modifier</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    </a>
                <?php } ?>
            </div>

            <div class="flex flex-col md:flex-row gap-4 md:gap-6 lg:gap-8 w-full">
                <div class="h-56 w-56 aspect-square rounded-xl bg-zinc-300 flex items-center justify-center flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-circle-2">
                        <path d="M18 20a6 6 0 0 0-12 0" />
                        <circle cx="12" cy="10" r="4" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 w-full">
                    <div class="flex flex-col gap-4 pt-2">
                        <div class="flex flex-col">
                            <b>Pseudo</b>
                            <span><?= $account["pseudo"] ?></span>
                        </div>
                        <div class="flex flex-col">
                            <b>Adresse email</b>
                            <span><?= $account["email"] ?></span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col">
                            <b>Région</b>
                            <span><?= $account["localisation"] ?></span>
                        </div>

                        <div class="flex flex-col hidden">
                            <b>Présentation</b>
                            <p class="whitespace-pre-wrap">Bonjour ! Je suis stupide.</p>
                        </div>
                    </div>    
                    
                    <!-- Social networks -->
                    <div class="flex flex-col gap-2 pt-2">
                        <h2 class="text-xl font-semibold">Réseaux sociaux</h2>

                        <i>Pas de réseaux sociaux renseignés.</i>

                        <div class="flex flew-row items-center gap-3 hidden">
                            <svg
                                viewBox="0 0 24 24"
                                fill="black"
                                class="h-6 w-6 flex-shrink-0"
                            >
                                <path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z" />
                            </svg>
                            <span class="text-purple-500 font-bold">@PHiBi#2540</span>
                        </div>

                        <a href="https://instagram.com/PHiBi" class="flex flew-row items-center gap-3 hover:underline hidden">
                            <svg
                                viewBox="0 0 1024 1024"
                                fill="black"
                                class="h-6 w-6 flex-shrink-0"
                            >
                                <path d="M512 306.9c-113.5 0-205.1 91.6-205.1 205.1S398.5 717.1 512 717.1 717.1 625.5 717.1 512 625.5 306.9 512 306.9zm0 338.4c-73.4 0-133.3-59.9-133.3-133.3S438.6 378.7 512 378.7 645.3 438.6 645.3 512 585.4 645.3 512 645.3zm213.5-394.6c-26.5 0-47.9 21.4-47.9 47.9s21.4 47.9 47.9 47.9 47.9-21.3 47.9-47.9a47.84 47.84 0 00-47.9-47.9zM911.8 512c0-55.2.5-109.9-2.6-165-3.1-64-17.7-120.8-64.5-167.6-46.9-46.9-103.6-61.4-167.6-64.5-55.2-3.1-109.9-2.6-165-2.6-55.2 0-109.9-.5-165 2.6-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6 46.9 46.9 103.6 61.4 167.6 64.5 55.2 3.1 109.9 2.6 165 2.6 55.2 0 109.9.5 165-2.6 64-3.1 120.8-17.7 167.6-64.5 46.9-46.9 61.4-103.6 64.5-167.6 3.2-55.1 2.6-109.8 2.6-165zm-88 235.8c-7.3 18.2-16.1 31.8-30.2 45.8-14.1 14.1-27.6 22.9-45.8 30.2C695.2 844.7 570.3 840 512 840c-58.3 0-183.3 4.7-235.9-16.1-18.2-7.3-31.8-16.1-45.8-30.2-14.1-14.1-22.9-27.6-30.2-45.8C179.3 695.2 184 570.3 184 512c0-58.3-4.7-183.3 16.1-235.9 7.3-18.2 16.1-31.8 30.2-45.8s27.6-22.9 45.8-30.2C328.7 179.3 453.7 184 512 184s183.3-4.7 235.9 16.1c18.2 7.3 31.8 16.1 45.8 30.2 14.1 14.1 22.9 27.6 30.2 45.8C844.7 328.7 840 453.7 840 512c0 58.3 4.7 183.2-16.2 235.8z" />
                            </svg>
                            <span class="text-purple-500 font-bold">@PHiBi</span>
                        </a>

                        <a href="https://twitter.com/PHiBi" class="flex flew-row items-center gap-3 hover:underline hidden">
                            <svg
                                viewBox="0 0 1024 1024"
                                fill="black"
                                class="h-6 w-6 flex-shrink-0"
                            >
                                <path d="M928 254.3c-30.6 13.2-63.9 22.7-98.2 26.4a170.1 170.1 0 0075-94 336.64 336.64 0 01-108.2 41.2A170.1 170.1 0 00672 174c-94.5 0-170.5 76.6-170.5 170.6 0 13.2 1.6 26.4 4.2 39.1-141.5-7.4-267.7-75-351.6-178.5a169.32 169.32 0 00-23.2 86.1c0 59.2 30.1 111.4 76 142.1a172 172 0 01-77.1-21.7v2.1c0 82.9 58.6 151.6 136.7 167.4a180.6 180.6 0 01-44.9 5.8c-11.1 0-21.6-1.1-32.2-2.6C211 652 273.9 701.1 348.8 702.7c-58.6 45.9-132 72.9-211.7 72.9-14.3 0-27.5-.5-41.2-2.1C171.5 822 261.2 850 357.8 850 671.4 850 843 590.2 843 364.7c0-7.4 0-14.8-.5-22.2 33.2-24.3 62.3-54.4 85.5-88.2z" />
                            </svg>
                            <span class="text-purple-500 font-bold">@PHiBi</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-3 mt-4">
            <h3 class="text-lg font-semibold">Aventuriers.ères</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
                <?php
                    $adventurers = get_user_adventurers($account['id_user']);

                    if (count($adventurers) == 0) {
                        echo "<p>Aucun.e aventurier.ière n'a été trouvé.e</p>";
                    }

                    foreach ($adventurers as $adventurer) { adventurer_card($adventurer); }
                ?>
            </div>
        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>
</body>