<?php
	header('Content-type: text/html; charset=utf-8');
	session_start();
	if (!empty($_POST['name_reg']) && !empty($_POST['pas_reg'])) {
		$name = $_POST['name_reg'];
		$password = $_POST['pas_reg'];
		$_SESSION['user_login'] = $name;
		$_SESSION['user_password'] = $password;
		header('Location: login.php');
	};
?>

<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href= "styles.css">
</head>
<body >
	<div id="content">
	
		<form action="" method="post">
			<h3>Регистрация</h3>
			<input type="text" name="name_reg" placeholder="Логин"><br>
			<input type="password" name="pas_reg" placeholder="Пароль"><br>
			<input type="submit" name="">
		</form>
		
	</div>
</body>
</html>