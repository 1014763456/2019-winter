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
        $Name = $_POST["UserName"];
        $Mail = $_POST["UserMail"];
        switch ($_POST["UserAge"]){
            case "Age1":
                $Age = "未满20岁";
                break;
            case "Age2":
                $Age = "20-29";
                break;
            case "Age3":
                $Age = "30-39";
                break;
            case "Age4":
                $Age = "40-49";
                break;
            case "Age5":
                $Age = "50岁以上";
                break;
        }
        $Phone = $_POST["UserPhone"];
        $Trouble = $_POST["UserTrouble"];
        $Number = $_POST["UserNumber"];
    ?>
    <p><i><?php echo $Name; ?></i>,您好! 您输入的数据如下:</p>
    电子邮件地址:<?php echo $Mail; ?><br>
    年龄:<?php echo $Age; ?><br>
    曾经使用过得手机品牌:<?php foreach($Phone as $Value) echo $Value.'&nbsp;'; ?><br>
    使用手机时最常碰到的问题:<?php echo $Trouble; ?><br>
    使用过哪些电信服务商:<?php foreach($Number as $Value) echo $Value.'&nbsp;'; ?><br>
</body>
</html>