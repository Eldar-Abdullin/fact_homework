<?
//1.
$strAboutMe = 'О себе:<br> заканчиваю обучение в Яндекс Практикуме,поступил в школу ФАКТ. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam id maiores quis voluptatum? Adipisci alias aperiam, consequuntur deserunt dicta, eligendi esse eum harum, hic inventore iste laborum libero nam pariatur.';
$arrAboutMe = explode('.',$strAboutMe);
$firstElementStr = array_shift($arrAboutMe);
$firstElementStr = '<span style="color:green">' . $firstElementStr . '</span>';
$arrAboutMe = implode($arrAboutMe);
$strFeedback = ' Все нравится!&#128077; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deleniti dolores, eaque eos harum itaque iure iusto laudantium neque obcaecati perspiciatis placeat quia rem reprehenderit saepe sed sint temporibus!';
$arrFeedback = explode(' ', $strFeedback);
//2.
$strAll = 'Личная страничка студента. Массивы. Регистрация. Эльдар Абдуллин. ' . $strAboutMe . $strFeedback . 'Любимые фильмы Дэвида Финчера. Бойцовский клуб. 7емь. Социальная сеть. Загадочная история Бенджамина Баттона. Любимые фильмы Гая Ричи. Карты, деньги, два ствола. Большой куш. Шерлок Холмс. Джентльмены. Количество гласных букв на сайте: Количество слов на сайте: День рожденья: Сегодня: Разница в днях составляет: ';
$strAllNew = mb_strtolower($strAll);
$arrAll = explode(' ', $strAll);
//$arrVowelLetters = ['а','о','э','е','и','ы','у','ё','ю','я','a','e','i','o','u','y'];
//$countVowelLetters = 0;
//$countWord = 0;
//echo $countVowelLetters . ' ' . $countWord;
$strVowelCount = substr_count($strAllNew, 'а') + substr_count($strAllNew, 'о') + substr_count($strAllNew, 'э') + substr_count($strAllNew, 'е') + substr_count($strAllNew, 'и') + substr_count($strAllNew, 'ы') + substr_count($strAllNew, 'у') + substr_count($strAllNew, 'ё') + substr_count($strAllNew, 'ю') + substr_count($strAllNew, 'я') + substr_count($strAllNew, 'f') + substr_count($strAllNew, 'e') + substr_count($strAllNew, 'i') + substr_count($strAllNew, 'o') + substr_count($strAllNew, 'u') + substr_count($strAllNew, 'y');//не смог сделать, чтобы у меня работала функция mb_str_split, пришлось использовать такой костыль =(
$date = '30.11.1992';
$date2 = DateTime::createFromFormat('d.m.Y',$date); // Преобразовываем дату в необходимый формат
$date1 = new DateTime(); // Сейчас
$dayDiff = $date2->diff($date1)->format('%a');
$dateToday = date('d.m.Y');
echo $dayDiff;
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
<body class="page">
<?
require_once('header.php');
?>
<main class="main">
    <section class="about-me">
    <img class="img border" src="../images/eldar-abdullin.jpeg" alt="Фото" title="фото">
    <h2 class="name border">Эльдар Абдуллин</h2>
    <p class="about border"><?echo $firstElementStr . $arrAboutMe?></p>
    <p class="feedback border"><? foreach ($arrFeedback as $key => $value){
            if($key % 2 === 0){
                echo '<span style="color:blue">' . $value . ' ' . '</span>';
            }else{
                echo '<span style="color:green">' . $value . ' ' . '</span>';
            }
        }?></p>
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
    <p>Количество гласных букв на сайте: <? echo $strVowelCount?></p>
    <p>Количество слов на сайте: <? echo count($arrAll)?></p>
    <p>День рожденья: <? echo $date?>. Сегодня: <? echo $dateToday ?>. Разница в днях составляет: <? echo $dayDiff?></p>
</footer>
</body>
</html>