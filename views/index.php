<?php
$page_title = "Accueil";
include_once "../includes/header.php";
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
                    // Generate a card_test variable with test data for each player
                    $card_test = [
                        "name" => "PHiBi",
                        "class" => "yipeee",
                        "species" => "TBH",
                        "level" => "69",
                        "avatar" => "https://pbs.twimg.com/profile_images/1662799693653442560/xvyy0ufj_400x400.jpg",
                        "bio" => "Je suis un testeur de FMD",
                    ];

                    // Loop through each player and generate a card
                    for ($i = 1; $i <= 3; $i++) { ?>
                        <div class="px-4 py-3 rounded-xl border-2 border-blue-300 bg-blue-100 w-full md:basis-1/2 lg:basis-1/3">
                            <div class="h-24 w-24 rounded-full overflow-hidden float-left mr-3">
                                <img src="<?php echo $card_test["avatar"]; ?>" alt="Avatar de <?php echo $card_test["name"]; ?>" />
                            </div>
                            <div class="home-players-list-item-content">
                                <h4 class="text-lg font-bold"><?php echo $card_test["name"]; ?></h4>
                                <p>Classe : <?php echo $card_test["class"]; ?></p>
                                <p>Espèce : <?php echo $card_test["species"]; ?></p>
                                <p>Niveau <?php echo $card_test["level"]; ?></p>
                                <p><?php echo $card_test["bio"]; ?></p>
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
                    // Generate a card_test variable with test data for each adventure
                    $card_test = [
                        "genre" => "Fantaisie",
                        "adventurers" => 4,
                        "maxAdventurers" => 6,
                        "synopsis" => "[présentation rapide du synopsis de la campagne]"
                    ];

                    // Loop through each player and generate a card
                    for ($i = 1; $i <= 3; $i++) { ?>
                        <div class="px-4 py-3 rounded-xl border-2 border-purple-300 bg-purple-100 w-full md:basis-1/2 lg:basis-1/3">
                            <h4 class="text-lg font-bold"><?php echo $card_test["genre"]; ?></h4>
                            <p><?php echo $card_test["adventurers"]; ?> / <?php echo $card_test["maxAdventurers"]; ?> aventuriers</p>
                            <p><?php echo $card_test["synopsis"]; ?></p>
                        </div>
                    <?php }
                ?>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <h3 class="text-lg font-medium">Les dernières news</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 auto-cols-min">
                <?php
                $rss_url = "https://www.dndbeyond.com/posts.rss";

                $rss_feed = simplexml_load_file($rss_url);

                $rss_feed_items = $rss_feed->channel->item;
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
