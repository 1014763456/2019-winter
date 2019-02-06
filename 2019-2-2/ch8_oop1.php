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
        class Employee{
            public $Name = '小丸子';
            public function ShowName(){
                echo "这名员工的名字是".$this->Name;//$this指的是对象本身,->用来访问对象的成员
            }
        }

        $Obj = new Employee();
        $Obj->Name = '花轮';
        $Obj->ShowName();
    ?>
</body>
</html>