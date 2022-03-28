<?php
	header('Content-type: text/html; charset=utf-8');
	session_start();
	if (!isset($_SESSION['reg'])) {
		header('Location: login.php');
		
	}
?>
<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="utf-8">
	<title>Профиль</title>
	<link rel="stylesheet" href= "styles.css">
</head>
<body >
<from action="" method="Post" >
<h3>Данные</h3>
<input type = "text"  name="name" placeholder="Имя"><br>
<input type = "text"  name="surname" placeholder="Фамилия"><br>
<input type = "text"  name="age" placeholder="Возраст"><br>
<input type = "submit"  name="" ">

</from>
</body>
</html>
