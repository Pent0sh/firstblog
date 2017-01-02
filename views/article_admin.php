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
                            <?php if($_GET["action"] == "add"): ?>
                                <input type="text" name="title" class="form-control" value="" autofocus required>
                            <?php else: ?>
                                <input type="text" name="title" class="form-control" value="<?=$article["title"]?>" autofocus required>
                            <?php endif; ?>
                        </lable>
                    </div>    
                    <div class="form-group">
                        <lable>
                            Дата публикации
                            <?php if($_GET["action"] == "add"): ?>
                                <input type="date" name="date" class="form-control" value="" required>
                            <?php else: ?>
                                <input type="date" name="date" class="form-control" value="<?=$article["date"]?>" required>
                            <?php endif; ?>
                        </lable>
                    </div>    
                    <div class="form-group">
                        <lable>
                            Текст статьи
                            <?php if($_GET["action"] == "add"): ?>
                                <textarea name="content" class="form-control" required></textarea>
                            <?php else: ?>
                                <textarea name="content" class="form-control" required><?=$article["content"]?></textarea>
                            <?php endif; ?>
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