<?php

$page_title = "Mon profil";

include_once '../includes/header.php';

require_once __DIR__ . '/../data/accounts.php';

$user = get_user($_SESSION["id"]);
var_dump($user);

if(isset($_POST['name_user'])){
    save_user($_SESSION["id"]);
}


?>
<body>
    <?php include_once '../includes/navbar.php'; ?>

    <main class="flex flex-col py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-lg mx-auto">
        <form class="flex flex-col gap-4 w-full mx-auto" action="myAccount" method="POST">
            <h1 class="text-2xl font-bold">Mon profil</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 w-full pb-2">
                <div class="flex flex-col sm:flex-row md:flex-col gap-4 pt-2 h-full">
                    <div class="h-32 w-32 md:h-36 md:w-36 aspect-square rounded-xl bg-zinc-300 flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-circle-2">
                            <path d="M18 20a6 6 0 0 0-12 0" />
                            <circle cx="12" cy="10" r="4" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label for="avatar">URL de l'avatar</label>
                        <input type="text" name="avatar" id="avatar" class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" placeholder="ex. https://i.imgur.com/123456.png" />
                    </div>
                </div>

                <div class="flex flex-col gap-4 pt-2">
                    <div class="flex flex-col gap-2">
                        <label for="name_user">Pseudo <span class="text-red-500">*</span></label>
                        <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="name_user" id="name_user" placeholder="ex. PhiBi" required value="<?= $user["pseudo"] ?>" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="email">Adresse email <span class="text-red-500">*</span></label>
                        <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="email" name="email" id="email" placeholder="ex. phibi@mail.com" required value="<?= $user["email"] ?>" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="password">Mot de passe <span class="text-red-500">*</span></label>
                        <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="password" name="password" id="password" required value="<?= $user["password"] ?>"/>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <div class="flex flex-col gap-2">
                        <label for="area">Région</label>
                        <input class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="area" id="area" placeholder="ex. Europe" value="<?php if(isset($user["localisation"])){ echo $user["localisation"]; } ?>" />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="bio">Présentation <span class="text-red-500">*</span></label>
                        <textarea class="outline-none rounded-lg px-2 py-1 border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" name="bio" id="bio" placeholder="ex. Bonjour, je suis stupide !" value="<?php if(isset($user["presentation_user"])){ echo $user["presentation_user"]; } ?>"></textarea>
                    </div>
                </div>    
                
                <!-- Social networks -->
                <div class="flex flex-col gap-2 pt-2">
                    <h2 class="text-xl font-semibold">Réseaux sociaux <span class="text-red-500">*</span></h2>

                    <div class="flex flew-row items-center gap-3">
                        <svg
                            viewBox="0 0 24 24"
                            fill="black"
                            class="h-6 w-6 flex-shrink-0"
                        >
                            <path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z" />
                        </svg>
                        <input class="outline-none rounded-lg px-2 py-1 w-full border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="discord" id="discord" placeholder="ex. @PhiBi" value="<?php if(isset($user["social_media_1"])){ echo $user["social_media_1"]; } ?>" />
                    </div>

                    <div class="flex flew-row items-center gap-3">
                        <svg
                            viewBox="0 0 1024 1024"
                            fill="black"
                            class="h-6 w-6 flex-shrink-0"
                        >
                            <path d="M512 306.9c-113.5 0-205.1 91.6-205.1 205.1S398.5 717.1 512 717.1 717.1 625.5 717.1 512 625.5 306.9 512 306.9zm0 338.4c-73.4 0-133.3-59.9-133.3-133.3S438.6 378.7 512 378.7 645.3 438.6 645.3 512 585.4 645.3 512 645.3zm213.5-394.6c-26.5 0-47.9 21.4-47.9 47.9s21.4 47.9 47.9 47.9 47.9-21.3 47.9-47.9a47.84 47.84 0 00-47.9-47.9zM911.8 512c0-55.2.5-109.9-2.6-165-3.1-64-17.7-120.8-64.5-167.6-46.9-46.9-103.6-61.4-167.6-64.5-55.2-3.1-109.9-2.6-165-2.6-55.2 0-109.9-.5-165 2.6-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6 46.9 46.9 103.6 61.4 167.6 64.5 55.2 3.1 109.9 2.6 165 2.6 55.2 0 109.9.5 165-2.6 64-3.1 120.8-17.7 167.6-64.5 46.9-46.9 61.4-103.6 64.5-167.6 3.2-55.1 2.6-109.8 2.6-165zm-88 235.8c-7.3 18.2-16.1 31.8-30.2 45.8-14.1 14.1-27.6 22.9-45.8 30.2C695.2 844.7 570.3 840 512 840c-58.3 0-183.3 4.7-235.9-16.1-18.2-7.3-31.8-16.1-45.8-30.2-14.1-14.1-22.9-27.6-30.2-45.8C179.3 695.2 184 570.3 184 512c0-58.3-4.7-183.3 16.1-235.9 7.3-18.2 16.1-31.8 30.2-45.8s27.6-22.9 45.8-30.2C328.7 179.3 453.7 184 512 184s183.3-4.7 235.9 16.1c18.2 7.3 31.8 16.1 45.8 30.2 14.1 14.1 22.9 27.6 30.2 45.8C844.7 328.7 840 453.7 840 512c0 58.3 4.7 183.2-16.2 235.8z" />
                        </svg>
                        <input class="outline-none rounded-lg px-2 py-1 w-full border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="instagram" id="instagram" placeholder="ex. @PhiBi" value="<?php if(isset($user["social_media_2"])){ echo $user["social_media_2"]; } ?>"/>
                    </div>

                    <div class="flex flew-row items-center gap-3">
                        <svg
                            viewBox="0 0 1024 1024"
                            fill="black"
                            class="h-6 w-6 flex-shrink-0"
                        >
                            <path d="M928 254.3c-30.6 13.2-63.9 22.7-98.2 26.4a170.1 170.1 0 0075-94 336.64 336.64 0 01-108.2 41.2A170.1 170.1 0 00672 174c-94.5 0-170.5 76.6-170.5 170.6 0 13.2 1.6 26.4 4.2 39.1-141.5-7.4-267.7-75-351.6-178.5a169.32 169.32 0 00-23.2 86.1c0 59.2 30.1 111.4 76 142.1a172 172 0 01-77.1-21.7v2.1c0 82.9 58.6 151.6 136.7 167.4a180.6 180.6 0 01-44.9 5.8c-11.1 0-21.6-1.1-32.2-2.6C211 652 273.9 701.1 348.8 702.7c-58.6 45.9-132 72.9-211.7 72.9-14.3 0-27.5-.5-41.2-2.1C171.5 822 261.2 850 357.8 850 671.4 850 843 590.2 843 364.7c0-7.4 0-14.8-.5-22.2 33.2-24.3 62.3-54.4 85.5-88.2z" />
                        </svg>
                        <input class="outline-none rounded-lg px-2 py-1 w-full border-2 border-blue-500 transition hover:border-blue-600 focus:border-blue-700 focus:ring-2 focus:ring-blue-700" type="text" name="twitter" id="twitter" placeholder="ex. @PhiBi" value="<?php if(isset($user["social_media_3"])){ echo $user["social_media_3"]; } ?>"/>
                    </div>
                </div>
            </div>

            <div class="flex flex-row justify-between w-full">
                <button class="flex flex-row items-center gap-2 bg-red-500 hover:bg-red-600 focus:bg-red-700 active:bg-red-800 text-white font-bold py-2 px-4 rounded-lg" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                    <span>Supprimer</span>
                </button>

                <button class="flex flex-row items-center gap-2 bg-purple-500 hover:bg-purple-600 focus:bg-purple-700 active:bg-purple-800 text-white font-bold py-2 px-4 rounded-lg" type="submit">
                    <span>Modifier</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
                </button>
            </div>
        </form>
    </main>

    <?php include_once '../includes/footer.php'; ?>
</body>