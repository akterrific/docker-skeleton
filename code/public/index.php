<?php
require_once '../vendor/autoload.php';

$url = 'http://news.yahoo.com/rss/';
$rss = Feed::loadRss($url);

echo 'Title: ', $rss->title;
echo 'Description: ', $rss->description;
echo 'Link: ', $rss->link;

foreach ($rss->item as $item) {
    echo 'Title: ', $item->title;
    echo 'Link: ', $item->link;
    echo 'Timestamp: ', $item->timestamp;
    echo 'Description ', $item->description;
    echo 'HTML encoded content: ', $item->{'content:encoded'};
}
