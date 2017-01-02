<?php
    
    function article_all($link){
        $query = "SELECT * FROM article ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $n = mysqli_num_rows($result);
        $articles = array();
        for ($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }

    function article_get($link, $id_article){
        $query = sprintf("SELECT * FROM article WHERE id=%d", $id_article);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $articles = mysqli_fetch_assoc($result);
        
        return $articles;   
    }

    function article_new($link, $title, $date, $content){
        $title = trim($title);
        $content = trim($content);
        
        if($title == ""){
            return false;
        };
        
        $sqlquery = "INSERT INTO article (title, date, content) VALUES ('%s', '%s', '%s')";
        
        $query = sprintf($sqlquery, mysqli_real_escape_string($link, $title), 
                                    mysqli_real_escape_string($link, $date),
                                    mysqli_real_escape_string($link, $content));
        
        echo $query;
        $result = mysqli_query($link, $query);
        if (!$result){
            die(mysqli_error($link));
        };
        
        return true;
    }

    function article_edit($link, $id, $title, $date, $content){
        $id = (int)$id;
        $title = trim($title);
        $date = trim($date);
        $content = trim($content);
        
        if($title == ""){
            return false;
        };
        
        $sqlquery = "UPDATE article SET title='%s', content='%s', date='%s' WHERE id='%d'";
        $query = sprintf($sqlquery, mysqli_real_escape_string($link, $title), 
                                    mysqli_real_escape_string($link, $content),
                                    mysqli_real_escape_string($link, $date),
                                    $id);
        $result = mysqli_query($link, $query);
        if (!$result){
            die(mysqli_error($link));
        };
        
        $article = mysqli_fetch_assoc($result);
        return $article;   
    }

    function article_delete($link, $id){
        $id = (int)$id;
        
        if($id == 0){
            return false;
        };
        
        $query = sprintf("DELETE FROM article WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        if (!$result){
            die(mysqli_error($link));
        };
        
        return mysqli_affected_rows($link);
    }

    function article_intro($text, $len=500){
        return mb_substr($text, 0, $len);    
    }
?>