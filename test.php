<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if (!isset($_REQUEST['name'])) { ?>
    <form action="<?php $_SERVER['SCRIPT_NAME'] ?>">
        <input type="text" name="name" value="" required><br>
        <input type="text" name="soname" value="" required><br>
        <input type="submit" name="GO" value="Отправить">
    </form>
<?php } else {
    $name = $_REQUEST['name'];
    $soname = $_REQUEST['soname'];
    $fio = array();
    $fio += [[$name, $soname]];
    echo '<pre>';
    print_r($fio);
    echo '</pre>';
}
?>
</body>
</html>