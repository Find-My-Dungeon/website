<header class="flex flex-row items-center justify-between px-6 py-2 bg-red-800 text-white">
    <div class="logo">
        <img src="img/logo.png" alt="logo">
    </div>

    <div x-data="{ tab: '' }" class="flex flex-row gap-4 md:gap-12 items-center">
        <div @mouseover="tab = 'sheets'" @mouseout="tab = ''" class="relative py-3">
            <h2 class="menu-dropdown">Mes fiches</h2>
            <div x-show="tab == 'sheets'"class="absolute top-10 left-0 flex flex-col gap-2 px-6 py-4 bg-gray-100 text-black">
                <a href="#">Personnages</a>
                <a href="#">Aventure</a>
            </div>
        </div>
        <h2 class="menu-link"><a href="#">Rechercher</a></h2>
    </div>
    
    <div x-data="{ tab: '' }" class="menu-icone">
        <div @mouseover="tab = 'user'" @mouseout="tab = ''" class="relative py-3">
            <img src="img/user.png" alt="user">
            <div x-show="tab == 'user'"class="absolute top-10 right-0 flex flex-col gap-2 px-6 py-4 bg-gray-100 text-black">
                <a href="#">Mon profil</a>
                <a href="#">Déconnexion</a>
            </div>
        </div>
        <img src="img/cloche.png" alt="cloche">
        <div class="notifications"></div>
    </div>
</header>