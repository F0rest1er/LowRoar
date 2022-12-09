<?php
$dbhost = "localhost";
$dbname = "romans1999_lowro";
$username = "romans1999_lowro";
$password = "H7gbcuD1454W";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_news_all() {
    global $db;
    $news = $db->query("SELECT * FROM news");
    return $news;
}

function get_item_by_id($id) {
    global $db;
    if(!$id){
        $id=1;
       }
    $news = $db->query("SELECT * FROM news WHERE id = $id");
    foreach ($news as $item) {
        return $item;
    }
}

function get_albums_all() {
    global $db;
    $albums = $db->query("SELECT * FROM albums");
    return $albums;
}
?>