<?php
$id = $_GET['id'];
$input_name = '';
$input_surname = '';

require_once('connect_to_db.php');

// у тебя тут апдейтитлся юзер здесь каждый раз когда ты заходишь на страницу редактирования, нужно что бы пост методом
// апдейтить, а не гет методом, ибо гет метод доступен кажому в адресной строке, и тупо любой может зааапдейтить юзера
if (isset($id)) {
    // достаточно передать в ссылке только id и вытаскивать данные по id
    $result = $mysqli->query("SELECT * FROM `users` WHERE `id` = '$id'");
    $data = mysqli_fetch_array($result);
    $input_name = $data['name'];
    $input_surname = $data['surname'];
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
<!--id в html должны быть уникальными, юзай значит тогда классы лучше-->
<div class="forma">
    <form action="create_update_user.php" method="post">
        <label>Имя: </label><br>
        <input type="text" placeholder="Имя" name="name" value="<?php echo $input_name ?>"><br><br>
        <label>Фамилия: </label><br>
        <input type="text" placeholder="Фамилия" name="surname" value="<?php echo $input_surname ?>"><br><br>
        <!--вот так в пост методе будут передать id юзера-->
        <input type="hidden" name="user_id" value="<?php echo $id ?>">
        <input type="submit" value="Отправить !" name="submit">
    </form>
</div>

<a href="index.php">
    <div id="BACK">Назад</div>
</a>
</body>
</html>