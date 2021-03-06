<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="../styles/style.css">
    <title>Таблица менделеева</title>
</head>
<body class="page" style="background-color: <? echo $_COOKIE['color']?>">
<?
require_once('header.php');
?>
  <table class="table">
    <tr>
      <td>
        <a class="table__url" href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D0%B8%D0%B9">
          <div class="kalium element">
            <p class="letter">K</p>
            <p class="number">19</p>
            <p class="mass">39,102</p>
            <p class="element__name">Калий</p>
          </div>
        </a>
      </td>
      <td>
        <a class="table__url" href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D1%8C%D1%86%D0%B8%D0%B9">
          <div class="сalcium element">
            <p class="letter">Ca</p>
            <p class="number">20</p>
            <p class="mass">40,08</p>
            <p class="element__name">Кальций</p>
          </div>
        </a>
      </td>
    </tr>
    <tr>
      <td>
        <a class="table__url" href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B5%D0%B4%D1%8C">
        <div class="cuprum element">
          <p class="letter cuprum__letter">Cu</p>
          <p class="number cuprum__number">29</p>
          <p class="mass">63,546</p>
          <p class="element__name element__name_cuprum">Медь</p>
        </div>
      </a>
      </td>
      <td>
        <a class="table__url" href="https://ru.wikipedia.org/wiki/%D0%A6%D0%B8%D0%BD%D0%BA">
        <div class="zincum element">
          <p class="letter zincum__letter">Zn</p>
          <p class="number zincum__number">30</p>
          <p class="mass">65,37</p>
          <p class="element__name element__name_zincum">Цинк</p>
        </div>
      </a>
      </td>
    </tr>
  </table>
  <a class="back" href="index.php">
    <p>Вернуться на главную страницу</p>
  </a>
</body>
</html>