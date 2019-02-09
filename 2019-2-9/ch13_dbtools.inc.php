<?php
    function create_connection(){
        $link = mysqli_connect("localhost","root","1014763456")
        or die ("无法建立数据连接:".musqli_connect_error());
        mysqli_query($link,"SET NAMES utf8");
        return $link;
    }
    function execute_sql($link,$database,$sql){
        mysqli_select_db($link,$database)
        or die ("打开数据库失败:".mysqli_error($link));
        $result = mysqli_query($link,$sql);//执行SQL语句
        return $result;
    }
?>