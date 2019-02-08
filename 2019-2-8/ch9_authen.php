<?php
    header("Content-type:text/html;charset=utf-8");//指定网页编码方式为UTF-8
    if(!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate:Basic realm="Happy Website"');
        echo "抱歉!您没有输入密码!";;
        exit();
    }else{
        echo "{$_SERVER['PHP_AUTH_USER']}您好!<br>";
        echo "您输入的密码为{$_SERVER['PHP_AUTH_PW']}!";
    }
?>