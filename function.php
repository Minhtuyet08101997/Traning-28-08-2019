<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function checkNumber($number)

	{
		
		if($number>10){
			echo 'lớn hơn 10';
		}
		else {
			echo 'nhỏ hơn hoặc bằng 10';
		}
	}
	checkNumber(100);
	?>
</body>
</html>
