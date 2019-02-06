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
        error_reporting(0);//关闭所有错误报告
        set_error_handler('error_handler');//设置错误处理程序

        open_folder("C:\\book");//试图打开不存在的文件

        function open_folder($folder){
            if(file_exists($folder)){
                opendir("C:\\book");
            }else{
                trigger_error('要打开的文件夹不存在',E_USER_ERROR);//触发一个错误
            }
        }

        function error_handler($errno,$errmsg,$filepath,$linenum){//定义错误处理程序
            echo '错误代码: '.$errno.'<br>';
            echo '错误信息: '.$errmsg.'<br>';
            echo '文件路径: '.$filepath.'<br>';
            echo '出错行数: '.$linenum.'<br>';
        }
    ?>
</body>
</html>