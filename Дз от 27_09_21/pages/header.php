<?
date_default_timezone_set('Asia/Yekaterinburg');
$time = date('G');
$url = '';
if($time > 8 && $time < 20){
    $url = "../images/sun.png";
}
else{
    $url = "../images/moon.png";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/header.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="header">
        <a class="url" href="index.php">
        <h1 class="h1">Личная страничка студента</h1>
        </a>
        <img class="time" src='<? echo $url?>' alt="">
        <nav class="menu">
            <a class="url" href="table-mendeleev.php">
                <img class="table__img" src="../images/table.png" alt="">
            </a>
            <a class="url" href="arrays.php">
                <p class="url_p">Массивы</p>
            </a>
            <a class="url" href="authorization.php">
                <p class="url_p">Регистрация</p>
            </a>
        </nav>
    </div>
</header>
</body>
</html>