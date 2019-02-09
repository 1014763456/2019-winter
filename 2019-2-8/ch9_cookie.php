<?php
    /*
        Cookie存放在客户端的内存或硬盘中,用来记录浏览者的各类信息,例如合适访问该网站,从事过哪些活动,
        购物车内有哪些商品等.在浏览者下次再次访问该网站时,浏览器会根据浏览者所输入的URL检查有误相关联的Cookie,
        有的话,就讲Cookie附带在网页请求中发给服务器,然后改网站就可以通过Cookie的几率辨认浏览者.
    */


    
    header("Content-type:text/html;charset=utf-8");
    // setcookie("UserName","小丸子",time()+60*60*24);//小丸子存储为%E5%B0%8F%E4%B8%B8%E5%AD%90
    // setrawcookie("UserName","小丸子",time()+60*60*24);//小丸子存储为小丸子

    // ob_start();//将输出放进缓冲区
    // echo "Hello World!";//字符串会暂时被放进缓冲区
    // setcookie("UserName","小丸子",time()+60*60*24);
    // ob_end_flush();//取出缓冲区的输出,显示"Hello World!"

    //setcookie("UserName","");//删除名称为UserName的Cookie其中第二个参数必须为""


    //读取cookie
    setcookie("Words[0]","垦丁");
    setcookie("Words[1]","冲浪");
    setcookie("Words[2]","真好玩");
    //isset()检测变量是否设置
    if(isset($_COOKIE["Words"])){
        foreach($_COOKIE["Words"] as $key =>$value){
            echo "$key:$value<br>";
        }
    }
?>