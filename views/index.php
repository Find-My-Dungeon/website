<?php
$page_title = "Accueil";
include_once "../includes/header.php";

require_once "../data/adventurers.php";
require_once "../data/adventures.php";
require_once "../data/news.php";

?>
<body>
<?php include_once "../includes/navbar.php"; ?>
<main class="flex flex-col py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
    <div class="home-welcome mb-8">
        <h1 class="text-2xl font-bold">Bienvenue sur FMD</h1>
        <p>Le site qui vous permet de créer et gérer vos fiches de personnages et vos aventures !</p>
    </div>
    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-3">
            <h3 class="text-lg font-semibold">Nouveaux.elles aventuriers.ières</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
                <?php
                    $adventurers = get_adventurers();

                    foreach ($adventurers as $adventurer) { adventurer_card($adventurer); }
                ?>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <h3 class="text-lg font-semibold">Nouvelles aventures</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
                <?php
                    $adventures = get_adventures();

                    foreach ($adventures as $adventure) { adventure_card($adventure); }
                ?>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <h3 class="text-lg font-semibold">Les dernières news</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
                <?php
                $rss_feed_items = get_news();
                
                $limit_rss = 3;
                $count = 0;

                foreach ($rss_feed_items as $news_item) {
                    news_card($news_item);

                    $count++;
                    if ($count >= $limit_rss) {
                        break;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php include_once "../includes/footer.php"; ?>

</body>
</html>
