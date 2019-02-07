<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        姓&nbsp;&nbsp;&nbsp;名 :<input type="text" name="UserName" size="40"><br>
        E-Mail :<input type="text" name="UserMail" size="40" value="username@mailserver"><br>
        年&nbsp;&nbsp;&nbsp;龄:
        <input type="radio" name="UserAge" value="Age1">未满20岁
        <input type="radio" name="UserAge" value="Age1" checked>20-29
        <input type="radio" name="UserAge" value="Age1">30-39
        <input type="radio" name="UserAge" value="Age1">40-49
        <input type="radio" name="UserAge" value="Age1">50以上<br>
        您使用过哪些品牌的手机?
        <input type="checkbox" name="UserPhone[]" value="htc" checked>htc
        <input type="checkbox" name="UserPhone[]" value="Apple" >Apple
        <input type="checkbox" name="UserPhone[]" value="ASUS" >ASUS
        <input type="checkbox" name="UserPhone[]" value="acer" >acer<br>
        您使用手机时最常碰到哪些问题?<br>
        <textarea name="UserTrouble" cols="45" rows="4" placeholder="上网速度不够快"></textarea><br>
        您使用过哪些电信服务商?(可复选)
        <select name="UserNumber[]" size="4" multiple>
            <option value="电信">电信</option>
            <option value="大哥大">大哥大</option>
            <option value="远传">远传</option>
            <option value="亚太电信">亚太电信</option>
        </select><br>
        <input type="submit" value="提交">
        <input type="reset" value="重新输入">
    </form>
</body>
</html>