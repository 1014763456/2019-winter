<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts-Customer Orders</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>
	<?php 
		@$fp=fopen("../../WWW/2019寒假/2019-1-20/orders.txt", 'rb');
		if(!$fp){
			echo "<p><stong>No orders pending.Please try again later.</strong></p>";
			exit;
		}
		while(!feof($fp)){
			$order = fgets($fp,999);
			echo $order."<br/>";
		}
	 ?>
</body>
</html>