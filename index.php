<?php
include "helper.php";
include "database.php";

$config = require ("config.php");

$db = new database($config["Database"]);

$sql = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    // echo"fent reactor";
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query;";
    $params = ["search_query" => $search_query];
} 

$posts = $db->query($sql, $params)->fetchall();

require "views/index.view.php";