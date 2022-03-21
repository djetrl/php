<?php
	header('Content-type: text/html; charset=utf-8');

	$num1 = $_GET['n'];
	$num2 = $_GET['s'];
	$oper = $_GET['v'];
	$result = $num1 . ' ' . $_GET['v'] . ' ' . $num2. ' = ';
/*
if($oper == '+' ) {
    $result = $num1 + $num2 ;
	
 } 
else if($oper == '-' ){
	$result = $num1 - $num2 ;
}
else if($oper == '*' ){
	$result = $num1 * $num2 ;
}
else if($oper == '/' ){
	$result = $num1 / $num2 ;
}
 echo '<h1>'.$num1.' ' .$oper. ' '.$num2.' = '.$result. '</h1>';
 */
 switch ($oper) {
	case '+':
	$result = $num1 + $num2 ;	
	break;

	case '-':
	$result = $num1 - $num2 ;
	break;
	
	case '*':
	$result = $num1 * $num2 ;
	break;

	case '/':
	$result = $num1 / $num2 ;
	break;


 }
?>
<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="utf-8">
	<title>fdsf</title>
	<meta name="viewport" content= "width-device-width, initial-scale=1.0">
</head>
<body >
	<form action="calc_html_php.php" method="GET" id ='fvv'>
		<span class="text" >x= </span><input name="n" type="number"><br>
		<span class="text" >y=</span><input type="number" name="s"><br>
	<span class="text" >Действие</span><select name="v" form='fvv'> 
		<option>+</option>
		<option>-</option>
		<option>*</option>
		<option>/</option>
		</select><br>
	
		<input type="submit" value="Отправить" >
	</form>
	<div id = 'res'>
		<?php
			
			if (isset($_GET['n']) && isset($_GET['s']) && isset($_GET['v'])){
				echo '<h1>'.$num1.' ' .$oper. ' '.$num2.' = '.$result. '</h1>';
			}
		
		?>
	
	</div>
</body>
</html>