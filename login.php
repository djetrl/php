<?php
	header('Content-type: text/html; charset=utf-8');
	session_start();
	if ($_GET['act'] === 'logout') {
		unset($_SESSION['reg']);
	}
	
	if (!empty($_POST['name']) && !empty($_POST['pas'])) {
		$name = $_POST['name'];
		$password = $_POST['pas'];
		if ($name === $_SESSION['user_login'] && $password === $_SESSION['user_password']) {
			$_SESSION['reg'] = 1;
			header('Location: index.php');
		}
	}
?>

<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
	<link rel="stylesheet" href= "styles.css">
</head>
<body >
	<div id="content">
		<form action="" method="POST">
			<h3>Авторизация</h3>
			<input type="text" name="name" placeholder="Логин"><br>
			<input type="password" name="pas" placeholder="Пароль"><br>
			<input type="submit" name="">
		</form>
		<a href="reg.php">Регистрация</a><br>
	</div>
</body>
</html>