<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts-Customer Orders</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>
	<?php
		@$fp=fopen("../../WWW/2019寒假/2019-1-21/orders.txt", 'rb');
		if(!$fp){
			echo "<p><stong>No orders pending.Please try again later.</strong></p>";
			exit;
		}
		flock($fp,LOCK_SH);//lock file for reading
		while(!feof($fp)){
			$order = fgets($fp,999);
			echo $order."<br/>";
		}

		echo "Final position of the file pointer is ".(ftell($fp));//ftell输出文件指针当前位置
		echo "<br/>";
		rewind($fp);//将文件指针指向文件开头
		echo "After rewind, the position is ".(ftell($fp));
		echo "<br/>";

		flock($fp,LOCK_UN);//release read lock
		fclose($fp);
	 ?>
</body>
</html>
