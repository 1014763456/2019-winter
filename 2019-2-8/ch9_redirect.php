<?php
    $URL = $_POST["mySelect"];
    header("Location:$URL");//把地址栏的信息换成choose页面传进来的地址
    exit();
?>