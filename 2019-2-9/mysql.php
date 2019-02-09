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
        // $link = mysqli_connect("localhost","root","1014763456");
        // mysqli_select_db($link,"students");
        // $link = mysqli_connect("localhost","root","1014763456","product") ;//等价于上面两句
        // if($link)
        //     echo "建立连接成功<br>";
        // else
        //     ("无法建立数据连接:".$link->connect_error);
        // $link->query("SET NAMES utf8");


        require_once("ch13_dbtools.inc.php");
        $link = create_connection();
        // echo "MySQL客户端函数库的版本:".mysqli_get_client_info()."<br>";
        // echo '$link 连接主机为:'.mysqli_get_host_info($link)."<br>";
        // echo '$link 资源变量的协议版本为:'.mysqli_get_proto_info($link)."<br>";


        $sql = "SELECT * FROM price WHERE category = '主板'";
        $result = execute_sql($link,"product",$sql);//执行SQL指令
        echo "category='主板'的记录有".mysqli_num_rows($result)."笔";//返回筛选记录数
        echo ",包含".mysqli_num_fields($result)."个字段.<br>";//返回筛选字段数
        
        $meta = mysqli_fetch_field_direct($result,1);
        echo "字段名: $meta->name";
        echo "数据类型: $meta->type";

        mysqli_close($link);
    ?>
</body>
</html>