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
	<title>Главная</title>
	<link rel="stylesheet" href= "styles.css">
</head>
<body >
	<h1>Привет, <?php echo $_SESSION['user_login'];?></h1>
	<a href="login.php?act=logout">Выйти</a><br>
	<a href="reg.php">Регистарция</a><br>
	<a href="prof.php">Профиль</a><br>
</body>
</html>
