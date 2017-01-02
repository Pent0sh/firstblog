<?php
    require_once("database.php");
    require_once("models/articles.php");
    
    $link = db_connect();    
    $id_article = $_GET["id"];
    
    $article = article_get($link, $id_article);
    
    include("views/article.php");
?>