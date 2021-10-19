<?
//1.
$strAboutMe = 'О себе:<br> заканчиваю обучение в Яндекс Практикуме,поступил в школу ФАКТ. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam id maiores quis voluptatum? Adipisci alias aperiam, consequuntur deserunt dicta, eligendi esse eum harum, hic inventore iste laborum libero nam pariatur.';
function strFirstChange($str){
    $arr = explode('.', $str);
    $firstElementStr = array_shift($arr);
    $firstElementStr = '<span style="color:green">' . $firstElementStr . '</span>';
    $arr = implode($arr);
    return $firstElementStr . $arr;
}
$strFeedback = ' Все нравится!&#128077; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deleniti dolores, eaque eos harum itaque iure iusto laudantium neque obcaecati perspiciatis placeat quia rem reprehenderit saepe sed sint temporibus!';
function strSecondChange($str)
{
    $arr = explode(' ', $str);
    foreach ($arr as $key => $value) {
        if ($key % 2 === 0) {
            echo '<span style="color:blue">' . $value . ' ' . '</span>';
        } else {
            echo '<span style="color:green">' . $value . ' ' . '</span>';
        }
    }
}
//2.
$strAll = 'Личная страничка студента. Массивы. Регистрация. Эльдар Абдуллин. ' . $strAboutMe . $strFeedback . 'Любимые фильмы Дэвида Финчера. Бойцовский клуб. 7емь. Социальная сеть. Загадочная история Бенджамина Баттона. Любимые фильмы Гая Ричи. Карты, деньги, два ствола. Большой куш. Шерлок Холмс. Джентльмены. Количество гласных букв на сайте: Количество слов на сайте: День рожденья: Сегодня: Разница в днях составляет: ';
function vowelCount($str){
    $newStr = mb_strtolower($str);
    return $strVowelCount = substr_count($newStr, 'а') + substr_count($newStr, 'о') + substr_count($newStr, 'э') + substr_count($newStr, 'е') + substr_count($newStr, 'и') + substr_count($newStr, 'ы') + substr_count($newStr, 'у') + substr_count($newStr, 'ё') + substr_count($newStr, 'ю') + substr_count($newStr, 'я') + substr_count($newStr, 'f') + substr_count($newStr, 'e') + substr_count($newStr, 'i') + substr_count($newStr, 'o') + substr_count($newStr, 'u') + substr_count($newStr, 'y');
}
function wordCount($str){
    return str_word_count($str);
}
$Birthday = '30.11.1992';
function dayDiff($date){
    $date2 = DateTime::createFromFormat('d.m.Y',$date); // Преобразовываем дату в необходимый формат
    $date1 = new DateTime(); // Сейчас
    return $dayDiff = $date2->diff($date1)->format('%a');
}
$dateToday = date('d.m.Y');
function fibonachi($x, $y){
    if($x <= 10000){
        echo $x . ' ';
        $z = $x + $y . ' ';
        fibonachi($y, $z);
    }
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
    <title>Эльдар</title>
</head>
<body class="page" style="background-color: <? echo $_COOKIE['color']?>">
<?
require_once('header.php');
?>
<main class="main">
    <section class="about-me">
    <img class="img border" src="../images/eldar-abdullin.jpeg" alt="Фото" title="фото">
    <h2 class="name border">Эльдар Абдуллин</h2>
    <p class="about border"><?echo strFirstChange($strAboutMe)?></p>
    <p class="feedback border"><? strSecondChange($strFeedback)?></p>
    </section>
    <section class="fincher">
        <h2 class="film_title">Любимые фильмы Дэвида Финчера</h2>
    <div class="table__fincher-films">
        <div class="film">
            <img class="film__img" src="../images/fight-club.jpg" alt="Бойцовский клуб">
            <p class="film__paragraph">Бойцовский клуб</p>
        </div>
        <div class="film">
            <img class="film__img" src="../images/se7en.jpg" alt="7емь">
            <p class="film__paragraph">7емь</p>
        </div>
        <div class="film">
            <img class="film__img" src="../images/social-network.jpg" alt="Социальная сеть">
            <p class="film__paragraph">Социальная сеть</p>
        </div>
        <div class="film">
            <img class="film__img" src="../images/batton.jpg" alt="Загадочная история Бенджамина Баттона">
            <p class="film__paragraph">Загадочная история Бенджамина Баттона</p>
        </div>
    </div>
    </section>
    <section>
        <h2 class="film_title">Любимые фильмы Гая Ричи</h2>
        <div class="table__richie-films">
            <div class="film film_richie">
                <img class="film__img" src="../images/lock,stock_and_two_smoking_barrels.jpg" alt="Карты, деньги, два ствола">
                <p class="film__paragraph">Карты, деньги, два ствола</p>
            </div>
            <div class="film film_richie">
                <img class="film__img" src="../images/snatch.jpg" alt="Большой куш">
                <p class="film__paragraph">Большой куш</p>
            </div>
            <div class="film film_richie">
                <img class="film__img" src="../images/sherlock_holmes.jpg" alt="Шерлок Холмс">
                <p class="film__paragraph">Шерлок Холмс</p>
            </div>
            <div class="film film_richie">
                <img class="film__img" src="../images/the_gentlemen.jpg" alt="Джентльмены">
                <p class="film__paragraph">Джентльмены</p>
            </div>
        </div>
    </section>
</main>
<footer>
    <p>Количество гласных букв на сайте: <? echo vowelCount($strAll)?></p>
    <p>Количество слов на сайте: <? echo wordCount($strAll)?></p>
    <p>День рожденья: <? echo $Birthday?>. Сегодня: <? echo $dateToday ?>. Разница в днях составляет: <? echo dayDiff($Birthday)?></p>
    <p>Числа Фибоначчи через рекурсию: <? fibonachi(0,1); ?></p>
</footer>
</body>
</html>