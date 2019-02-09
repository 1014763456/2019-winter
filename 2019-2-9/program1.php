<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 普通的动态网页 -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="submit" value="显示诗句"><br><br>
        <?php if(!isset($_POST["Send"])){?>
        <input type="hidden" name="Send" value="TRUE">
        <?php }
        else echo file_get_contents("poetry.txt");
        ?>
    </form>
</body>
</html>