<?php
	header('Content-type: text/html; charset=utf-8');
	$celsius = $_GET['c'];
	$fahrenheit = ($celsius * 1.8)+32;
?>
<form action="zadacha1.php" method="GET">
<span class="text" >C* </span><input name="c" type="number"><br>

<input type="submit" value="Отправить" >
</form><br>
<div id='output'>

		<?php
			
			if (isset($_GET['c'])){
				echo '<h1>'.'F = '.$fahrenheit.'</h1>';
			}
		
		?>


 </div>