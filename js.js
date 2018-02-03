// я вообще обычно юзаю jquery потому что это быстрее чем чистый js, я бы тебе рекомендовал посмотреть туториалы про
// панель разработчика в хроме, я пользуюсь половиной вкладок
// файлы еще называй нормальными именами и переменные, без всяких циыр
function userDelete(id) {
    var conf = confirm('Удалить пользоватeля c id = ' + id);
    if (conf) {
        $.post("delete_user.php", {id: id})
            .done(function (data) {
                alert(data);
                window.location.reload();
            });
    }
}