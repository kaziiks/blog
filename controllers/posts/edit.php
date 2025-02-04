<?php

require "Validator.php";


$pageTitle = "Izveidosana";

if (!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
}

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    if (!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "vai nu sac drukat vai beidz drukat";
    }    
    if (empty($errors)) {
        $sql = "UPDATE posts
        SET content = :content
        WHERE id = :id";
        $params ["content"] = $_POST["content"];
        $db->query($sql, $params);
        header("Location: /"); 
        exit();
    }
}

require "views/posts/edit.view.php";
