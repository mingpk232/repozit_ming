<?php
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	date_default_timezone_set("Europe/Kiev");
	$mysqli = new mysqli("localhost", "root", "", "userlexa");
	$mysqli->query("SET NAMES 'utf8'");

	if (isset($_POST["name"]) != '' && isset($_POST["surname"]) !='' && !isset($_GET['id'])) {
		$mysqli->query("INSERT INTO `users` (`name`,`surname`,`reg_date`) VALUES ('$name','$surname','".date("d.m.Y в H:i")."') ");
		$mysqli->close();
		header("Location: index.php") ;
		exit();
	}
	else if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$mysqli->query("UPDATE `users` SET `name`= '$name', `surname`= '$surname', `change_date` = '".date("d.m.Y в H:i")."' WHERE `id` = '$id' ");
		$mysqli->close();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PAGE2</title>
	<link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
	
	<div id="forma">
		<form action="" method="post">
			<label>Имя: </label><br>
			<input type="text"  placeholder="Имя" name="name" value="<?php echo $_GET['name']?>"><br><br>

			<label>Фамилия: </label><br>
			<input type="text"  placeholder="Фамилия" name="surname" value="<?php echo $_GET['surname']?>"><br><br>

			<input type="submit" value="Отправить !" name="done">
		</form>
	</div>
	
	<a href="index.php">
		<div id="BACK">Назад</div>
	</a>



</body>
</html>