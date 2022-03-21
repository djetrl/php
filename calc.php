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
	echo '<h1>'.$num1.' ' .$oper. ' '.$num2.' = '.$result. '</h1>';
	break;

	case '-':
	$result = $num1 - $num2 ;
	echo '<h1>'.$num1.' ' .$oper. ' '.$num2.' = '.$result. '</h1>';
	break;

	case '*':
	$result = $num1 * $num2 ;
	echo '<h1>'.$num1.' ' .$oper. ' '.$num2.' = '.$result. '</h1>';
	break;

	case '/':
	$result = $num1 / $num2 ;
	echo '<h1>'.$num1.' ' .$oper. ' '.$num2.' = '.$result. '</h1>';
	break;


 }
?>