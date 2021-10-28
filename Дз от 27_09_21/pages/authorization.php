<?
require "AuthorizationClass.php";

$site = $_POST['site'];
//$login = 'eldar'; логин и пароль eldar 123
//$password = md5('123');
$result = '';
$hostname = 'localhost';
$username = 'eldar';
$password = '123';
$db = 'authorization';
$authorization = new AuthorizationClass($hostname,$username,$password,$db);
$connect = $authorization->db_connect();
$select = $authorization->select($connect);
$arrayUsers = $authorization->arrSelect($select);
print_r($arrayUsers);
//$db_connect = mysqli_connect($hostname,$username,$password,$db);
//mysqli_set_charset($db_connect, 'utf8');
//$select = mysqli_query($db_connect, "select * from `users`");
//$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
function sendEmail($str)
{
    mail('mail@com.ru', 'Тема письма', $str);
}
function selectSite($str){
    header("location: $str");
}

if($site == 'fact'){
    selectSite('https://fact.digital/');
    $site = '';
    setcookie('lastSite', 'fact', time() + 3600 * 24 * 7, '/');
}
elseif($site == 'bitrix'){
    selectSite('https://www.1c-bitrix.ru/');
    $site = '';
    setcookie('lastSite', 'bitrix', time() + 3600 * 24 * 7, '/');
}

if ($_POST['comment'] !== '') {
    sendEmail($_POST['comment']);
}
if (count($_POST) > 0) {
    $newLogin = trim($_POST['login']);
    $newPassword = md5(trim($_POST['password']));
    if ($newLogin === '' || $newPassword === '') {
        $result = 'Заполните все данные';
    } elseif ($authorization->getUser($newLogin,$newPassword,$arrayUsers) == true) {
        $result = 'Авторизация успешна' . '<br>' . '<textarea name="comment" id="" cols="30" rows="10"></textarea>' . '<br>' . '<button onclick="">Отправить</button>' . '<p>На какой сайт хотите перейти?</p>
<br>
<form method="post">
    <select name="site" id="">
        <option value="fact">fact</option>
        <option value="bitrix">bitrix</option>
    </select>
    <input type="submit">
</form>';
    } else {
        $result = 'Данные неверны';
    }
} else {
    $result = 'Введите данные';
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
<body class="page" style="background-color: <? echo $_COOKIE['color']?>">
<?
require_once('header.php');
?>
<h1>Авторизация</h1>
<form method="post">
    <input type="text" name="login">
    <input type="text" name="password">
    <button>Отправить</button>
    <p><? echo $result ?></p>
</form>
</body>
</html>
