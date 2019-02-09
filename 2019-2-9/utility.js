//创建XMLHttpRequest对象
function createXMLHttpRequest(){
    try{
        var XHR = new XMLHttpRequest();//其他浏览器
    }
    catch(e1){
        try{
            var XHR = new ActiveXObject("Msxml2.XMLHTTP");//IE6+浏览器
        }
        catch(e2){
            try{
                var XHR = new ActiveXObject("Microsoft.XMLHTTP");//IE5浏览器
            }
            catch(e3){
                XHR = false;//不支持Ajax
            }
        }
    }
    return XHR;
}