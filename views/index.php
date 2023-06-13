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
            <h3 class="text-lg font-medium">Nouveaux.elles aventuriers.ières</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
                <?php
                    // Get adventurers from data/adventurers.php
                    $adventurers = get_adventurers();

                    // Loop through each player and generate a card
                    foreach ($adventurers as $adventurer) { ?>
                        <div class="px-4 py-3 rounded-xl border-2 border-blue-300 bg-blue-100 w-full md:basis-1/2 lg:basis-1/3">
                            <div class="h-24 w-24 rounded-full overflow-hidden float-left mr-3">
                                <img src="<?php echo $adventurer["avatar"]; ?>" alt="Avatar de <?php echo $adventurer["name"]; ?>" />
                            </div>
                            <div class="home-players-list-item-content">
                                <h4 class="text-lg font-bold"><?php echo $adventurer["name"]; ?></h4>
                                <p>Classe : <?php echo $adventurer["class"]; ?></p>
                                <p>Espèce : <?php echo $adventurer["species"]; ?></p>
                                <p>Niveau <?php echo $adventurer["level"]; ?></p>
                                <p><?php echo $adventurer["bio"]; ?></p>
                            </div>
                        </div>
                    <?php }
                ?>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <h3 class="text-lg font-medium">Nouvelles aventures</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
                <?php
                    $adventures = get_adventures();

                    // Loop through each player and generate a card
                    foreach ($adventures as $adventure) { ?>
                        <div class="px-4 py-3 rounded-xl border-2 border-purple-300 bg-purple-100 w-full md:basis-1/2 lg:basis-1/3">
                            <h4 class="text-lg font-bold"><?php echo $adventure["genre"]; ?></h4>
                            <p><?php echo $adventure["adventurers"]; ?> / <?php echo $adventure["maxAdventurers"]; ?> aventuriers</p>
                            <p><?php echo $adventure["synopsis"]; ?></p>
                        </div>
                    <?php }
                ?>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <h3 class="text-lg font-medium">Les dernières news</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
                <?php
                $rss_feed_items = get_news();
                
                $limit_rss = 3;
                $count = 0;

                foreach ($rss_feed_items as $item) { ?>
                    <div class="px-4 py-3 rounded-xl border-2 border-blue-300 bg-blue-100 w-full md:basis-1/2 lg:basis-1/3">
                        <h4 class="text-lg font-bold"><?php echo $item->title; ?></h4>
                        <div class="line-clamp-3">
                            <?php echo $item->description; ?>
                        </div>
                        <a href="<?php echo $item->link; ?>" class="text-blue-700 hover:underline">Lire la suite</a>
                    </div>

                    <?php
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
