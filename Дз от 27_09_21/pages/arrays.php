<?

//5. Посчитать количество членов семьи Ivanovs, Petrovs, Smith. Посчитать количество Ivan (1),Kate(2), Tom(1) и т.д.
$arr = [
    'Ivanovs' => ['Ivan', 'Kate', 'Tom'],
    'Petrovs'=>['Bob', 'Ann', 'Tanya'],
    'Smith' => ['Kate', 'Same'],
];
$newArr = [];
foreach ($arr as $value){
    $newArr = array_merge($newArr, $value);
}// создаем пустой массив и через цикл делаем из двумерного массива простой, со всеми элементами
$countArr = array_count_values($newArr);// создаем переменную, которая подсчитывает все элементы массива
// Задача 1
$arr1 = []; //создаем пустой массив
for($i = 0;$i < 10; $i++){
    $arr1[] = mt_rand(1,20);
}// через цикл заполняем его десятью случайными цифрами
// Задача 2
$arr2 = [
    'Россия' => ['Москва', 'Астрахань', 'Магнитогорск', 'Анапа'],
    'Англия' => ['Лондон', 'Альфретон', 'Альчестер', 'Бирмингем'],
    'США' => ['Арлингтон', 'Нью‑Йорк', 'Чикаго']
];
$newArr2 = [];
foreach ($arr2 as $value){
    $newArr2 = array_merge($newArr2, $value);
}// создаем пустой массив и через цикл делаем из двумерного массива простой, со всеми элементами
// Задача 3
$arr3 = [
    '1' => [1,2,3,5,6,7,5],
    '2' => [1,4,5,7,2,44],
    '3' => [5,2,7,4,23]
];
$newArr3 = [];
foreach ($arr3 as $value) {
    $newArr3 = array_merge($newArr3, $value);
}
$countArrNumber = array_count_values($newArr3);
//не совсем понял условие задачи, надеюсь сделал правильно
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Массивы</title>
</head>
<body class="page" style="background-color: <? echo $_COOKIE['color']?>">
<?
require_once ('header.php');
?>
<section class="arrays">
    <div class="border array">
        <p class="array__title">Решение задачи №5 с урока</p>
        <p>
        <?
        foreach ($arr as $key=>$value){
            echo 'Количество членов семьи в ' . $key . ' равно ' . count($value) . '<br>';
        }
        echo 'Количество Ivan равно ' . $countArr['Ivan'] . '<br>';
        echo 'Количество Kate равно ' . $countArr['Kate'] . '<br>';
        ?>
        </p>
    </div>
    <div class="border array">
        <p class="array__title">Решение задачи №1</p>
        <p>
            <?
            foreach ($arr1 as $value){
                if($value % 2 == 0){
                    echo '<b>' . $value . '</b><br>';
                }
                else{
                    echo $value . '<br>';
                }
            }
            ?>
        </p>
    </div>
    <div class="border array">
        <p class="array__title">Решение задачи №2</p>
        <p>
            <?
            foreach ($newArr2 as $value){
                if(mb_substr($value, 0, 1) == 'А'){
                    echo $value . '<br>';
                }
            }
            ?>
        </p>
    </div>
    <div class="border array">
        <p class="array__title">Решение задачи №3</p>
        <p>
            <?
            echo 'Общее количество элементов массива равно ' . count($newArr3) . '<br>';
            foreach ($countArrNumber as $key=>$value){
                echo 'Количество цифры ' . $key . ' в массиве равно ' . $value . '<br>';
            }
            ?>
        </p>
    </div>
</section>
</body>
</html>
