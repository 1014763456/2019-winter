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
        // 在类内定义常数和定义一般常数不同的是必须改用const关键词
        // 并且当我们要访问类内常数时,只能通过类名和::运算符,不能通过对象
        // ps. 常数名称前面没有$符号,例如:const PI = 3.14;
        class Circle{
            const PI = 3.14;
            public $Radius;
            public function ShowArea(){
                echo '圆面积为'.($this->Radius * $this->Radius * self::PI);//self关键词表示当前类
            }
        }

        echo '圆周率为'.Circle::PI.'<br>';
        $Obj = new Circle();
        $Obj->Radius = 10;
        $Obj->ShowArea();
    ?>
</body>
</html>