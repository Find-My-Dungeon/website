<?php

function get_news() {
    $rss_url = "https://www.dndbeyond.com/posts.rss";

    $rss_feed = simplexml_load_file($rss_url);

    $rss_feed_items = $rss_feed->channel->item;

    return $rss_feed_items;
}

function news_card($news_item) {
    ?>
    <a target="_blank" href="<?= $news_item->link ?>" class="px-4 py-3 rounded-xl border-2 border-blue-300 bg-blue-100 transition hover:border-blue-400 hover:bg-blue-200 hover:shadow-lg w-full md:basis-1/2 lg:basis-1/3">
        <h4 class="text-lg font-bold"><?php echo $news_item->title; ?></h4>
        <div class="line-clamp-3">
            <?php echo $news_item->description; ?>
        </div>
    </a>
    <?php
}