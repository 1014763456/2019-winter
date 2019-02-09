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
        require_once("ch13_dbtools.inc.php");
        //设置每页显示记录数
        $records_per_page = 5;
        //获取要显示第几页的记录
        if(isset($_GET["page"]))
            $page = $_GET["page"];
        else
            $page = 1;

        //建立数据连接
        $link = create_connection();

        $sql = "SELECT category AS '零部件种类',brand AS '品牌',specification AS '规格',
        price AS '价格',date AS '报价日期' FROM price";
        $result = execute_sql($link,"product",$sql);

        //获取字段数目
        $total_fields = mysqli_num_fields($result);

        //获取记录数
        $total_records = mysqli_num_rows($result);

        //计算总页数
        $total_pages = ceil($total_records/$records_per_page);//ceil()向上取整

        //计算本业第一个记录的序号
        $started_record = $records_per_page * ($page - 1);

        //将记录指针一直本页第一个记录的序号
        mysqli_data_seek($result,$started_record);

        //显示字段数名
        echo "<table border='1' align='center' width='800'>";
        echo "<tr align='center'>";
        for($i=0;$i<$total_fields;$i++)
            echo "<td>".mysqli_fetch_field_direct($result,$i)->name."</td>";
        echo "</tr>";

        //显示记录
        $j = 1;
        while($row = mysqli_fetch_row($result) and $j<=$records_per_page){
            echo "<tr>";
            for($i=0;$i<$total_fields;$i++)
                echo "<td>$row[$i]</td>";
            $j++;
            echo"</tr>";
        }
        echo "</table>";

        //产生导航条
        echo "<p align='center'>";
        if($page>1){
            echo "<a href='ch13_show_record.php?page=".($page-1)."'>上一页</a>";
        }
        for($i=1;$i<=$total_pages;$i++){
            if($i == $page)
                echo "$i";
            else
                echo "<a href='ch13_show_record.php?page=$i'>$i</a>";
        }
        if($page<$total_pages)
            echo "<a href='ch13_show_record.php?page=".($page+1)."'>下一页</a>";
        echo "</p>";

        //释放内存
        mysqli_free_result($result);
        //关闭数据连接
        mysqli_close($link);
    ?>
</body>
</html>