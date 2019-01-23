<?php
	// create short variable names
	$tireqty=$_POST['tireqty'];
	$oilqty=$_POST['oilqty'];
	$sparkqty=$_POST['sparkqty'];
	$address=$_POST['address'];
	$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];//apache conf/httpd.conf里面有DocumentRoot  "D:\phpStudy\PHPTutorial\WWW"
	$date=date("l jS \of F Y h:i:s A");
 ?>

<html>
<head>
	<title>Bob's Auto Parts-Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
	<?php

	echo "<p>Order processed at ".date("l jS \of F Y h:i:s A")."</p>";
	echo "<p>Your order is as follows:</p>";

	$totalqty = 0;
	$totalqty = $tireqty + $oilqty + $sparkqty;

	echo "Items ordered: ".$totalqty."</br>";

	if($totalqty==0){
		echo "You did not order anything on the previous page!<br/>";
	}else{
		if($tireqty>0){
			echo $tireqty." tires<br/>";
		}
		if($oilqty>0){
			echo $oilqty." bottles of oil<br/>";
		}
		if($sparkqty>0){
			echo $sparkqty." spark plugs<br/>";
		}
	}


	$totalamount = 0.00;
	define('TIREPRICE',100);
	define('OILPRICE',10);
	define('SPARKPRICE',4);
	$totalamount = $tireqty * TIREPRICE + $sparkqty * SPARKPRICE + $oilqty * OILPRICE;
	echo "Subtotal:$".number_format($totalamount,2,'.','')."<br />";//number_format是用来保留小数的
	echo "<p>Total of order is $ ".$totalamount."</p>";
	echo "<p>Address to ship to is ".$address."</p>";
	$outputstring = $date."\t".$tireqty."tires\t".$oilqty."oil\t".$sparkqty."spark plugs\t\$".$totalamount."\t".$address."\n";
 	// open file for appending
 	//默认是放到phpstudy启动类型文件夹下
	$fp=fopen('../../WWW/2019寒假/2019-1-21/orders.txt', 'ab');
	flock($fp, LOCK_EX);
	if(!$fp){
		echo "<p><strong>Your order could not be processed at this time.Please try later.</strong></p>";
		exit;
	}
	fwrite($fp, $outputstring,strlen($outputstring));
	flock($fp,LOCK_UN);




	fclose($fp);
	echo "<p>order written.</p>";
 	?>
</body>
</html>
