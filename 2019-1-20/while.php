<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>Distance</td>
			<td>Cost</td>
		</tr>
		<?php
			$distance = 50;
			for($distance=50;$distance<=250;$distance+=50){
				echo"<tr>
					<td>".$distance."</td>
					<td>".($distance/10)."</td>
				</tr>\n";
			}
			// while($distance<=250){
			// echo"<tr>
			// <td>".$distance."</td>
			// <td>".($distance/10)."</td>
			// </tr>\n";
			// $distance+=50;
			// }
		?>
	</table>
</body>
</html>