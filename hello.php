<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Использование данных формы</title>
</head>
<body>
<?php if (!isset($_REQUEST['doGo'])) { ?>
    <form action="<?php $_SERVER['SCRIPT_NAME'] ?>">
        логин: <input type="text" name="login" value=""><br>
        пароль: <input type="password" name="password" value=""><br>
        <input type="submit" name="doGo" value="Push button!">
    </form>
<?php }

if (@$_REQUEST['login'] == "root" && $_REQUEST['password'] == "Qweasd") {
    echo "Доступ открыт для пользователя: {$_REQUEST['login']}";
    #system("rundll32.exe user32.dll,LockWorkStation");
    echo "<p>Ваш ip: {$_SERVER['REMOTE_ADDR']}</p>";
    echo "<p>Ваш браузер: {$_SERVER['HTTP_USER_AGENT']}</p>";
} else {
    echo "Доступ закрыт";
}
?>

</body>
</html>