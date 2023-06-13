<?php

function get_news() {
    $rss_url = "https://www.dndbeyond.com/posts.rss";

    $rss_feed = simplexml_load_file($rss_url);

    $rss_feed_items = $rss_feed->channel->item;

    return $rss_feed_items;
}