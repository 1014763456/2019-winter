<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // open_folder("C:\\book");
        // function open_folder($folder){
        //     if(file_exists($folder))
        //         opendir($folder);
        //     else
        //         echo "要打开的文件夹不存在";
        // }
        
        try{
            open_folder("C:\\book");
        }catch(Exception $ex){  
            echo '错误信息: '.$ex->getMessage().'<br>';
            echo '错误代码: '.$ex->getCode().'<br>';
            echo '文件路径: '.$ex->getFile().'<br>';
            echo '错误行数: '.$ex->getLine().'<br>';
        }

        function open_folder($folder){
            if(file_exists($folder))
                opendir($folder);
            else
                throw new Exception('要打开的文件夹不存在');//如果文件不存在就抛出例外
        }
    ?>
</body>
</html>