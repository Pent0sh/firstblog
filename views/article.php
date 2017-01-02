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
            <div>
                <div class="article">
                    <h3><?=$article["title"]?></h3>
                    <em>Опубликовано: <?=$article["date"]?></em>
                    <p><?=$article["content"]?></p>
                </div>
            </div>    
        </div>    
        <footer>
            <p>My first blog <br> Copyright &copy; 2016</p>
        </footer>
    </body>
</html> 