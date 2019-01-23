<?php
/**
 * Created by PhpStorm.
 * User: 黄鹏
 * Date: 2019/1/21
 * Time: 15:35
 */
$orders = file("../../WWW/2019寒假/2019-1-21/orders.txt");
$number_of_orders = count($orders);
if($number_of_orders == 0){
    echo "<p><stong>No orders pending.Please try again later.</strong></p>";
    exit;
}
for($i=0;$i<$number_of_orders;$i++){
    echo $orders[$i]."<br/>";
}