<?php

function get_news() {
    $rss_url = "https://www.dndbeyond.com/posts.rss";

    $rss_feed = simplexml_load_file($rss_url);

    $rss_feed_items = $rss_feed->channel->item;

    return $rss_feed_items;
}

function news_card($news_item) {
    ?>
    <div class="px-4 py-3 rounded-xl border-2 border-blue-300 bg-blue-100 w-full md:basis-1/2 lg:basis-1/3">
        <h4 class="text-lg font-bold"><?php echo $news_item->title; ?></h4>
        <div class="line-clamp-3">
            <?php echo $news_item->description; ?>
        </div>
        <a href="<?php echo $news_item->link; ?>" class="text-blue-700 hover:underline">Lire la suite</a>
    </div>
    <?php
}