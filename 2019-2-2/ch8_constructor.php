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
    // 构造函数是用来将对象初始化的函数,在创建对象是会自动执行,常见的初始化动作有设置初始值,
    // 打开文件,建立数据库连接,建立网络连接等。php构造函数的名称为__construct,有无参数均可.
        class Employee{
            public $Name;
            function __construct($Str){
                $this->Name = $Str;
                echo "已经创建名字为".$this->Name."的对象!";
            }
        }
        $Obj = new Employee("小红豆");//传入参数给构造函数
    ?>
</body>
</html>