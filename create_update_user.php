<?php
// проверяем что нажата кнопка
if(isset($_POST["submit"])) {
    require_once('connect_to_db.php');
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $id = $_POST["user_id"];
    if(isset($id) && !empty($id)) {
        // Длина строки не должна привышать 120 символов по правилам, скачай phpshtorm там есть линия которая
        // ограничинвает, задно туториалы по нему можешь глянуть, он отличен для больших проектов.
        // Кстате делай реформат кода, забиндь какие-то клавиши, и просто жми их когда что-то написал, что бы он был
        // ровным
        $mysqli->query("UPDATE `users` SET `name`= '$name',
         `surname`= '$surname', `change_date` = '" . date("d.m.Y в H:i") . "' WHERE `id` = '$id' "
        );
    } else {
        // кстате здесь у меня не работало без колумны 'change_date', записівай во все колумны или ставь по дефолту
        // и вообще я думал ты поставишь колумнам 'change_date', 'reg_date' тип datetime а не вот это, никому же не
        // нужна твоя буква 'в', лучше добавь туда год. А при большом желании всегда можно дату перевести в строку и
        // что-то в ней заменить
        $mysqli->query("INSERT INTO `users` (`name`,`surname`,`reg_date`, `change_date`)
        VALUES ('$name','$surname','" . date("d.m.Y в H:i") . "', '" . date("d.m.Y в H:i") . "') ");
    }
    $mysqli->close();
    header("Location: index.php");
}