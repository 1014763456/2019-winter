<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Static定义的方法可以不需要先创建一个对象才访问,可以直接访问 -->
    <?php
        class MyMath{
            public static function Cubic($x){
                return $x * $x * $x;
            }
        }

        //php中用.来连接两个字符串
        //::用来访问静态、const和类中重写的属性与方法
        echo '5的三次方为:'.MyMath::Cubic('5');//由于没有创建对象,所以不能用->运算符,而用::
    ?>
</body>
</html>