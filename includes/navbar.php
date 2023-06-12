<header class="h-16 flex flex-row items-center justify-between px-6 py-2 bg-red-800 text-white">
    <a href="/" class="logo">
        <div class="flex h-10 w-10 bg-white text-black">
            <span class="m-auto font-bold">FMD</span>
        </div>
    </a>

    <?php if ($page_title != "Login") { ?>
        <div x-data="{ tab: '' }" class="flex flex-row gap-4 md:gap-12 items-center">
            <div @mouseover="tab = 'sheets'" @mouseout="tab = ''" class="relative py-3">
                <h2 class="menu-dropdown">Mes fiches</h2>
                <div x-cloak x-show="tab == 'sheets'" class="absolute top-10 left-0 flex flex-col px-6 py-2 bg-zinc-100 text-black border-2 border-zinc-300">
                    <a href="#" class="-ml-6 -mr-6 py-2 px-6 hover:bg-zinc-200">Personnages</a>
                    <a href="#" class="-ml-6 -mr-6 py-2 px-6 hover:bg-zinc-200">Aventure</a>
                </div>
            </div>
            <h2 class="menu-link"><a href="#">Rechercher</a></h2>
        </div>

        <div x-data="{ tab: '' }" class="flex flex-row gap-2">
            <div @mouseover="tab = 'user'" @mouseout="tab = ''" class="relative py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-circle-2">
                    <path d="M18 20a6 6 0 0 0-12 0" />
                    <circle cx="12" cy="10" r="4" />
                    <circle cx="12" cy="12" r="10" />
                </svg>

                <div x-cloak x-show="tab == 'user'" class="absolute top-12 right-0 flex flex-col px-6 py-2 bg-zinc-100 text-black border-2 border-zinc-300">
                    <a href="#" class="-ml-6 -mr-6 py-2 px-6 hover:bg-zinc-200">Mon profil</a>
                    <a href="#" class="-ml-6 -mr-6 py-2 px-6 hover:bg-zinc-200">Déconnexion</a>
                </div>
            </div>

            <div @mouseover="tab = 'notifications'" @mouseout="tab = ''" class="relative py-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                </svg>

                <div x-cloak x-show="tab == 'notifications'" class="absolute top-12 right-0 flex flex-col gap-2 px-6 py-4 bg-zinc-100 text-black w-56 border-2 border-zinc-300">
                    <span class="italic text-zinc-700 flex-shrink-0">No notifications.</span>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <h2 class="text-xl font-bold mx-auto">FindMyDungeon</h2>
    <?php } ?>
</header>