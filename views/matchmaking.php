<?php
$page_title = "Matchmaking";
include_once "../includes/header.php";

require_once "../data/adventurers.php";
require_once "../data/adventures.php";

?>
<body>
<?php include_once "../includes/navbar.php"; ?>
<main class="py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
    <h2 class="text-2xl font-bold col-span-full mb-4">Matchmaking</h2>

    <div x-data="{ adventurer: true, adventure: true }" class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-6 lg:gap-8">
        <form action="" method="post" class="flex flex-col bg-purple-200 px-4 pt-3 pb-4 rounded-2xl mb-auto">
            <span>Vous cherchez :</span>

            <div class="mt-4">
                <div class="flex flex-row justify-between items-center">
                    <b class="text-purple-900">Un.e aventurier.ère</b>

                    <input
                        type="checkbox"
                        name="adventurer"
                        id="adventurer"
                        x-on:click="adventurer = !adventurer"
                        x-bind:checked="adventurer"
                        class="w-4 h-4 mr-2"
                    />
                </div>

                <div x-show="adventurer" class="mt-2 px-3 py-2 bg-purple-300 rounded-xl">
                    <div class="grid grid-cols-4 gap-4 pb-1">
                        <div class="flex flex-col gap-1 col-span-3">
                            <label for="adventurer_class" class="text-purple-800">Classe</label>
                            <select name="adventurer_class" id="adventurer_class" class="px-2 py-1 bg-white rounded-lg outline-none border-2 border-purple-500 transition focus:border-purple-700 focus:ring-2 focus:ring-purple-700">
                                <option value="all">Toutes</option>
                                <option value="barbarian">Barbare</option>
                                <option value="bard">Barde</option>
                                <option value="cleric">Clerc</option>
                                <option value="druid">Druide</option>
                                <option value="fighter">...autres exemples</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-1">
                            <label for="level" class="text-purple-800">Niveau</label>
                            <input type="number" name="adventurer_level" id="adventurer_level" min="1" max="20" class="pl-2 h-full rounded-lg outline-none border-2 border-purple-500 transition focus:border-purple-700 focus:ring-2 focus:ring-purple-700" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="flex flex-row justify-between items-center">
                    <b class="text-purple-900">Une aventure</b>

                    <input
                        type="checkbox"
                        name="adventure"
                        id="adventure"
                        x-on:click="adventure = !adventure"
                        x-bind:checked="adventure"
                        class="w-4 h-4 mr-2"
                    />
                </div>

                <div x-show="adventure" class="mt-2 px-3 py-2 bg-purple-300 rounded-xl">
                    <div class="flex flex-col gap-1 pb-1">
                        <label for="adventure_genre" class="text-purple-800">Genre</label>
                        <select name="adventure_genre" id="adventure_genre" class="px-2 py-1 bg-white rounded-lg outline-none border-2 border-purple-500 transition focus:border-purple-700 focus:ring-2 focus:ring-purple-700">
                            <option value="all">Tous</option>
                            <option value="dungeon">Donjon</option>
                            <option value="horror">Horreur</option>
                            <option value="mystery">Mystère</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="px-4 py-2 mt-4 mx-auto w-2/3 bg-purple-500 disabled:bg-purple-500/75 rounded-lg text-white font-bold hover:bg-purple-700 transition" x-bind:disabled="!adventurer && !adventure">Rechercher</button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:col-span-2 xl:col-span-3">
            <?php
            $adventurers = get_adventurers();
            $adventures = get_adventures();

            foreach ($adventurers as $adventurer) { adventurer_card($adventurer); }
            foreach ($adventures as $adventure) { adventure_card($adventure); }
            ?>
        </div>
    </div>
</main>
<?php include_once "../includes/footer.php"; ?>
</body>