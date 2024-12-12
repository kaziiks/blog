<?php
include "helper.php";
include "database.php";

$config = require ("config.php");

$db = new database($config["Database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();


echo"<ul>";
foreach($posts as $post){
    echo "<li>" . $post["content"] . "</li>";
};
echo "</ul>";