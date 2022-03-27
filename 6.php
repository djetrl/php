<?php
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];
	$num3 = $_GET["num3"];
	$num1_cr = $num1 * $num1;
	$num2_cr = $num2 * $num2;
	$num3_cr = $num3 * $num3;
	$str = "числа неявляются тройкой Пифагора";
	if ($num1_cr == $num2_cr + $num3_cr ) {
		$str = "числа являются тройкой Пифагора";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="6.php" method="GET">

		<input type="text" name="num1">

		<input type="text" name="num2">

		<input type="text" name="num3">

		<input type="submit" value="Отправить">
	</form><br>
	<span>
		<?php
			
			if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
				echo $str;
			}
		
		?>
	</span>
</body>
</html>