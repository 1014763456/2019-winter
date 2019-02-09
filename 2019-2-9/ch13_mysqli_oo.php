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
        //打开product数据库,从price数据表中读取category为主板的数据
        $mysqli = new mysqli("localhost","root","1014763456","product");
        if($mysqli->connect_errno)
            die ("无法建立数据连接:".$mysqli->connect_error);
        $mysqli->query("SET NAMES utf8");
        $result = $mysqli->query("SELECT * FROM price WHERE category='主板'");

        echo "<table border='1' align='center'><tr align='center'>";
        //显示字段名
        while($field = $result->fetch_field())//mysqli_fetch_field()获取字段内容
            echo "<td>" . $field->name . "</td>";
        echo "</tr>";
        while($row = $result->fetch_row()){//mysqli_fetch_row()获取记录内容
            echo "<tr>";
            for($i=0;$i<$result->field_count;$i++)
                echo "<td>".$row[$i]."</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
        $mysqli->close();
    ?>
</body>
</html>