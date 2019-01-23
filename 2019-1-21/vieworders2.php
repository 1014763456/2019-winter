<?php
/**
* Created by PhpStorm.
* User: 黄鹏
* Date: 2019/1/21
* Time: 15:34
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts-Customer Orders</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2>
    <?php
//    Read in the entire file.
//    Each order becomes an element in the array
        $orders = file("../../WWW/2019寒假/2019-1-21/orders.txt");
//    count the number of orders in the array
        $number_of_orders = count($orders);
        if($number_of_orders == 0){
            echo "<p><stong>No orders pending.Please try again later.</strong></p>";
            exit;
        }
        echo "<table border='1'>\n";
        echo "<tr><th bgcolor='#ccf'>Order Date</th>
            <th bgcolor='#ccf'>Tires</th>
            <th bgcolor='#ccf'>Oil</th>
            <th bgcolor='#ccf'>Spark Plugs</th>
            <th bgcolor='#ccf'>Total</th>
            <th bgcolor='#ccf'>Address</th>
            <tr/>";
        for($i=0;$i<$number_of_orders;$i++){
//            split up each line
            $line = explode("\t",$orders[$i]);
//            keep only the number of items ordered
            $line[1] = intval($line[1]);
            $line[2] = intval($line[2]);
            $line[3] = intval($line[3]);
//            output each order
            echo "<tr>
            <td align='right'>$line[0]</th>
            <td align='right'>$line[1]</td>
            <td align='right'>$line[2]</td>
            <td align='right'>$line[3]</td>
            <td align='right'>$line[4]</td>
            <td align='right'>$line[5]</td>
            <tr/>";
        }
        echo "</table>";
    ?>
</body>
</html>
