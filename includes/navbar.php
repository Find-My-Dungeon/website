<header class="sticky top-0 left-0 right-0 h-16 flex flex-row items-center justify-between px-6 py-2 bg-red-800 text-white z-20 shadow-lg">
    <a href="/" class="logo">
        <div class="flex h-10 w-10 bg-white text-black">
            <span class="m-auto font-bold">FMD</span>
        </div>
    </a>

    <?php if (isset($_SESSION) && isset($_SESSION['loggedin'])) { ?>
        <div x-data="{ tab: '' }" class="hidden md:flex flex-row gap-4 md:gap-12 items-center">
            <div @mouseover="tab = 'sheets'" @mouseout="tab = ''" class="relative py-3">
                <h2 class="menu-dropdown">Mes fiches</h2>
                <div x-cloak x-show="tab == 'sheets'" class="absolute top-10 left-0 flex flex-col px-6 py-2 bg-zinc-100 text-black border-2 border-zinc-300">
                    <a href="myCharacters" class="-ml-6 -mr-6 py-2 px-6 hover:bg-zinc-200">Personnages</a>
                    <a href="#" class="-ml-6 -mr-6 py-2 px-6 hover:bg-zinc-200">Aventure</a>
                </div>
            </div>
            <h2 class="menu-link"><a href="/matchmaking">Rechercher</a></h2>
        </div>

        <div x-data="{ tab: '' }" class="hidden md:flex flex-row gap-2">
            <div @mouseover="tab = 'user'" @mouseout="tab = ''" class="relative py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-circle-2">
                    <path d="M18 20a6 6 0 0 0-12 0" />
                    <circle cx="12" cy="10" r="4" />
                    <circle cx="12" cy="12" r="10" />
                </svg>

                <div x-cloak x-show="tab == 'user'" class="absolute top-12 right-0 flex flex-col px-6 py-2 bg-zinc-100 text-black border-2 border-zinc-300">
                    <a href="account" class="-ml-6 -mr-6 py-2 px-6 hover:bg-zinc-200">Mon profil</a>
                    <a href="logout" class="-ml-6 -mr-6 py-2 px-6 hover:bg-zinc-200">Déconnexion</a>
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

        <button x-data="{ showSidebar: false }" class="block md:hidden">
            <div @click="showSidebar = !showSidebar" class="h-10 w-10 flex items-center justify-center outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </div>

            <div
                x-cloak
                x-show="showSidebar"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-end="opacity-0 transform"
                class="fixed top-0 right-0 w-full h-full bg-black/50 z-50"
            >    
                <!-- Overlay -->
                <div @click="showSidebar = false" class="absolute top-0 right-0 w-full h-full"></div>

                <div
                    x-show="showSidebar"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-16"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-end="opacity-0 transform translate-x-16"
                    class="fixed top-0 right-0 w-72 h-full bg-red-800 z-50"
                >
                    <div class="absolute left-0 flex items-center justify-center h-16 w-16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell">
                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        </svg>
                    </div>

                    <div @click="showSidebar = false" class="absolute right-0 flex items-center justify-center h-16 w-16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </div>

                    <div class="flex flex-col gap-6 items-center justify-center h-full">
                        <h2 class="text-xl font-semibold"><a href="myCharacters">Mes fiches</a></h2>
                        <h2 class="text-xl font-semibold"><a href="#">Rechercher</a></h2>
                        <h2 class="text-xl font-semibold"><a href="account">Mon profil</a></h2>
                        <h2 class="absolute bottom-8 text-xl font-semibold"><a href="logout">Déconnexion</a></h2>
                    </div>
                </div>
        </button>
    <?php } else { ?>
        <h2 class="block text-xl font-bold mx-auto">FindMyDungeon</h2>

        <div class="h-10 w-10 bg-white/20 flex items-center justify-center rounded-full">
            <a href="login" class="text-xl font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
            </a>
        </div>
    <?php } ?>
</header>