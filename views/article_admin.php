<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="../stylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="conteiner">
            <h1>Мой первый блог</h1>
            <div>
                <form method="post" action="index.php?action=<?=$_GET["action"]?>&id=<?=$_GET["id"]?>" role="form">
                    <div class="form-group">
                        <lable>
                            Заголовок
                            <input type="text" name="title" class="form-control" value="<?=$article["title"]?>" autofocus required>
                        </lable>
                    </div>    
                    <div class="form-group">
                        <lable>
                            Дата публикации
                            <input type="date" name="date" class="form-control" value="<?=$article["date"]?>" required>
                        </lable>
                    </div>    
                    <div class="form-group">
                        <lable>
                            Текст статьи
                            <textarea name="content" class="form-control" required><?=$article["content"]?></textarea>
                        </lable>
                    </div>     
                    <input type="submit" value="Сохранить" class="btn">   
                </form>    
                       
            </div>    
        </div>    
        <footer>
            <p>My first blog <br> Copyright &copy; 2016</p>
        </footer>
    </body>
</html> 