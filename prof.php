<?php
	require_once 'user.php';
	session_start();
	if (!isset($_SESSION['reg'])) {
		header('Location: login.php');
	}
	$user = new User();
		
	
	if (!empty($_POST)){
		$user -> save_to_session();
		$user -> load_from_form();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div id="content">
		<form action="" method="post">
			<h3>Профиль</h3>
			<input type="text" name="name" value=' <?php echo $user -> get_name(); ?>'  placeholder="Имя"><br>	
			<input type="text" name="surname" value='<?php echo $user -> get_surname(); ?>' placeholder="Фамилия"><br>
			<input type="text" name="age" value=' <?php echo $user -> get_age(); ?>' placeholder="Возраст"><br>
			<input type="submit" value="Сохранить" name="" >
		</form>
	</div>
</body>
</html>


