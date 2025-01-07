<?php
include "helper.php";
include "database.php";

$config = require ("config.php");

$db = new database($config["Database"]);

$sql = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) &&$_GET["search_query"] != ""){
    // echo"fent reactor";
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query;";
    $params = ["search_query" => $search_query];
} 

$posts = $db->query($sql, $params)->fetchall();
    
echo "<form>";
echo "<input name='search_query' />";
echo "<button>meklet</button>";
echo "</form>";

echo"<ul>";

foreach($posts as $post){
    echo "<li>" . $post["content"] . "</li>";
};
echo "</ul>";