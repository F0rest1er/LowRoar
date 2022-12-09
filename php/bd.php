<?php
$host = "localhost";
$user = "romans1999_lowro";
$password = "H7gbcuD1454W";
$database = "romans1999_lowro";
$link = new mysqli($host, $user, $password, $database);

function get_news_all() {
    global $link;
    $news = $link->query("SELECT * FROM news");
    return $news;
}

function get_item_by_id($id) {
    global $link;
    if(!$id){
        $id=1;
       }
    $news = $link->query("SELECT * FROM news WHERE id = $id");
    foreach ($news as $item) {
        return $item;
    }
}
?>