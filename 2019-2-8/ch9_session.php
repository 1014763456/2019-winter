<?php
    /*
        当Web服务器收到客户端的请求时,会找出相关的文件或程序,然后加以执行,讲结果转换成HTMl文件,再传送给客户端并中断连接.
        因为处理完以后会中断连接,因此Web服务器并没有几率客户端的信息,若要几率客户端的信息,需要使用一些技巧.
        比如:文件访问,表单处理程序,Cookie以及Session.

        session就相当于是服务器端的cookie
    */

    header("Content-type:text/html;charset=utf-8");
    session_start();//启用SEssion功能
    echo "Session ID为".session_id()."<br>";//获取当前浏览器的Session ID然后显示出来
    //通过$_SESSION访问Session内所记录的变量
    if(!isset($_SESSION['Count'])){
        $_SESSION['Count'] = 1;
    }else{
        $_SESSION['Count']++;
    }
    echo "这是您在本浏览器第{$_SESSION['Count']}次加载本网页";

    
    /*
        Session相关函数:
        1.session_start():通知PHP要启用Session功能,返回值恒为TRUE.由于访问网页浏览器会赋值一个唯一的Sesion ID(SID)
        ,以和其他浏览器区分,并且SID存放在客户端的Cookie或嵌入URL一起传送,因此Session_start()函数会在客户端的Cookie
        或者HTTP参数中检查SID,没有就创建一个新的SID,否则根据找到的SID恢复所有Session变量的值.
        2.session_unset():释放所有Session变量.
        3.session_destroy():清除所有Session变量的值.
        4.session_id([string id]):若指定参数id,表示以id取代当前的SID,否则返回当前的SID
        5.session_name([string name]):若指定name,表示以name取代当前的session名称,否则返回session名称
        6.session_regenerate_id():替当前的session重新生成一个SID,成功返回TURE,失败返回FALSE
        7.session_encode():将当前的session内容加以编码,返回编码后的字符串.
        8.session_decode(string data):将参数data加以解码,还原成当前的session内容,成功返回TRUE,失败返回FALSE
        9.session_write_close():保存session数据并终止当前session.通常在script结束时,session数据都会被保存无须
        另外调用这个函数,除非做了php不知道script已经结束的动作,例如网页重定向.这个函数有一个别名session_commit()
        10.session_save_path([string path]):将当前的session存放路径设置为参数path所指定的路径.
    */
?>