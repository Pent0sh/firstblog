<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="conteiner">
            <h1>Мой первый блог</h1>
            <a href="admin">Панель администритора</a>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a["id"]?>"><?=$a["title"]?></a></h3>
                    <em>Опубликовано: <?=$a["date"]?></em>
                    <p><?=article_intro($a["content"])?></p>
                </div>
                <?php endforeach ?>
            </div>    
        </div>    
        <footer>
            <p>My first blog <br> Copyright &copy; 2016</p>
        </footer>
    </body>
</html> 