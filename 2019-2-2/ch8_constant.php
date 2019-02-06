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
        class Circle{
            const PI = 3.14;
            public $Radius;
            public function ShowArea(){
                echo '圆面积为'.($this->Radius * $this->Radius * $this->PI);
            }
        }

        // echo '圆周率为'.Circle::PI.'<br>';
        $Obj = new Circle();
        $Obj->Radius = 10;
        $Obj->ShowArea();
    ?>
</body>
</html>