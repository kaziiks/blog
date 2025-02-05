<?php

$sql = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE catagories LIKE :search_query;";
    $params = ["search_query" => $search_query];
} 

$posts = $db->query($sql, $params)->fetchall();
$paigetitle = "fentanyl";
require "views/posts/index.view.php";