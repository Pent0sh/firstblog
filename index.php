<?php
    require_once("database.php");
    require_once("models/articles.php");
    
    $link = db_connect();
    $articles = article_all($link);
    
    include("views/articles.php");
?>