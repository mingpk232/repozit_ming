<?php
require_once('connect_to_db.php');
$result = $mysqli->query("SELECT * FROM `users` ORDER BY `id` ASC");
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main page</title>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <script src="js.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div id="btn_1">
    <a href="page2.php">
        <button id="btn1">Создание нового профиля</button>
    </a>
</div>

<table id='table'>
    <thead>
    <th>ID</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <!-- опять id, юзай классы -->
    <th id='reg_date'>Дата регистрации</th>
    <th id='red_date'>Дата редактирования</th>
    <th id='user_delete'>Удалить пользователя</th>
    <th id='redactor'>Редактировать</th>
    </thead>
    <tbody>
    <!-- ну вот как-то так выводятся данные из php в html -->
    <?php while ($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['surname'] ?></td>
            <td><?php echo $row['reg_date'] ?></td>
            <td><?php echo $row['change_date'] ?></td>
            <td>
                <button id='<?php echo $row['id'] ?>' onClick='userDelete(id)'>Удалить</button>
            </td>
            <td>
                <a href='page2.php?id=
                    <?php echo $row['id'] ?>'>
                    <button className='<?php echo $row[' name'] ?>'>Редактировать</button>
                </a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>

