<?php
$page_title = "Accueil";
include_once "includes/header.php";
?>
<body>
<? include_once "includes/navbar.php"; ?>
<main class="flex flex-col py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
    <div class="home-welcome mb-8">
        <h1 class="text-2xl font-bold">Bienvenue sur FMD</h1>
        <p>Le site qui vous permet de créer et gérer vos fiches de personnages et vos aventures !</p>
    </div>
    <div class="flex flex-col gap-6">
        <div class="home-players">
            <h3 class="text-lg font-medium">Nos nouveaux.elles aventuriers.ières</h3>
            <div class="home-players-list">
                <div class="home-players-list-item-1"></div>
                <div class="home-players-list-item-2"></div>
                <div class="home-players-list-item-3"></div>
            </div>
        </div>
        <div class="home-scenarios">
            <h3 class="text-lg font-medium">Nos nouvelles aventures</h3>
            <div class="home-scenarios-list">
                <div class="home-scenarios-list-item-1"></div>
                <div class="home-scenarios-list-item-2"></div>
                <div class="home-scenarios-list-item-3"></div>
            </div>
        </div>
        <div class ="home-news">
            <h3 class="text-lg font-medium">Les dernières news</h3>
            <div class="home-news-list">
                <div class="home-news-list-item-1"></div>
                <div class="home-news-list-item-2"></div>
                <div class="home-news-list-item-3"></div>
            </div>
        </div>
    </div>
</main>

<?php include_once "includes/footer.php"; ?>

</body>
</html>
