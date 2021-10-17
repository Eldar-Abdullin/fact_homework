<?
$login = 'eldar';
$password = md5('123');
$result = '';
function sendEmail($str){
    mail('mail@com.ru', 'Тема письма', $str);
}
if($_POST[comment] !== ''){
    sendEmail($_POST[comment]);
}
print_r($_POST);
if (count($_POST) > 0){
    $newLogin = trim($_POST['login']);
    $newPassword = md5(trim($_POST['password']));
    if ($newLogin == '' || $newPassword == '') {
        $result =  'Заполните все данные';
    }
    elseif ($newLogin === $login && $newPassword === $password) {
        $result =  'Авторизация успешна' . '<br>' . '<textarea name="comment" id="" cols="30" rows="10"></textarea>' . '<button onclick="">Отправить</button>';

    }
    else{
        $result = 'Данные неверны';
    }
} else {
    $result =  'Введите данные';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Авторизация</title>
</head>
<body class="page">
<?
require_once ('header.php');
?>
<h1><?
    if($login = true){
        echo 'Авторизация';
    }
    else{
        echo 'Регистрация';
    }
    ?></h1>
<form method="post">
    <input type="text" name="login">
    <input type="text" name="password">
    <button>Отправить</button>
    <p><? echo $result?></p>

</form>

</body>
</html>
