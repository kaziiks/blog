<?php
include "helper.php";
include "database.php";

$config = require ("config.php");

$db = new database($config["Database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

if (isset($_GET["search_query"]) &&$_GET["search_query"] != ""){
    echo"fent reactor";
    dd("SELECT * FROM posts WHERE content LIKE" . $_GET["search_query"]);
    $posts = $db->query("SELECT * FROM posts WHERE content LIKE" . $_GET["search_query"])->fetchall();
}

echo "<form>";
echo "<input name='search_query' />";
echo "<button>meklet</button>";
echo "</form>";

echo"<ul>";
foreach($posts as $post){
    echo "<li>" . $post["content"] . "</li>";
};
echo "</ul>";