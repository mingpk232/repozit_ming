<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main page</title>
	<link rel="stylesheet" href="style1.css" type="text/css">
	<script src="js.js" type="text/javascript"></script>
</head>
<body>
	<div id="btn_1">
		<a href="page2.php">
			<button id="btn1">Создание нового профиля</button>
		</a>

		
	</div>

	<?php

		//Табличка со всеми пользователями
		$mysqli = new mysqli("localhost", "root", "", "userlexa");
		$mysqli->query("SET NAMES 'utf8'");
		$newRow = $mysqli->query("SELECT * FROM `users` ORDER BY `id` ASC");

		echo (
			"<table id='table'>
				<tr>
					<th>ID</th>
					<th>Имя</th>
					<th>Фамилия</th>
					<th id='reg_date'>Дата регистрации</th>
					<th id='red_date'>Дата редактирования</th>
					<th id='user_delete'>Удалить пользователя</th>
					<th id='redactor'>Редактировать</th>
				</tr>"
		);

		while(($row = $newRow->fetch_assoc())!=false) {
			echo (
				"<tr>
					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['surname']."</td>
					<td>".$row['reg_date']."</td>
					<td>".$row['change_date']."</td>
					<td><button id='".$row['id']."' onClick='userDelete(id)'>Удалить</button></td>
					<td><a href='page2.php?name=".$row['name']."&surname=".$row['surname']."&id=".$row['id']."'><button className='".$row['name']."'>Редактировать</button></a></td>
				</tr>"
			);
		}
		echo "</table>";




		//Получение подтверждения от JS (колхоз)
		
		if (isset($_GET['id'])) {
			$mysqli->query("DELETE FROM `users` WHERE `id`='".$_GET['id']."' ");
		}
	?>

	<a href="index.php">
		<div id="BACK">Обновить страницу</div>
	</a>
	
</body>
</html>

