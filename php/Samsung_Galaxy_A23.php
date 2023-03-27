<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TeleSales</title>
  <link rel="icon" href="img/logo (2).png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/tovar.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body data-page="catalog">
  <header>
    <div class="div_header">
      <nav>
        <ul class="div_ul">
          <li>
            <a href="php/index.php">
              <img src="img/logo.png" alt="TeleSales" height="200px">
            </a>
          </li>
          <li>
            Социальные сети:
            <a href="#">VK,</a>
            <a href="#">Viber</a>
          </li>
        </ul>
      </nav>
    </div>
    <div>
      <nav>
        <ul class="ul_nav">
          <li class="li_nav">
            <a href="php/index.php">СМАРТФОНЫ</a>
          </li>
          <li class="li_nav">
            <a href="accessories.html">АКСЕССУАРЫ</a>
          </li>
          <li class="li_nav" >
            <a href="bracket.html">КОРЗИНА</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div>
      <p class="breadcrumbs">Смартфон-Xiaomi Redmi Note 10 Pro</p>
      <hr>
    </div>
    <div class="container">
    <ul id="goods" class="list-unstyled">
      <img src="img/loading.gif" alt="" />
  </ul>
</div>
<div class="container_main">
<script id="catalog-template" type="text/template">
  <% _.each(goods, function(good) { %>
      <li class="good-item row">
          <div class="col-md-4">
              <img class="good-item__img" src="<%- good.Samsung_Galaxy_A23.img %>" />
          </div>
          <div class="col-md-8">
              <a class="good-item__id" href="/product/<%= good.Samsung_Galaxy_A23.id %>">Артикул <%= good.Samsung_Galaxy_A23.id %></a>
              <div class="good-item__name"><%- good.Samsung_Galaxy_A23.name %></div>
              <div class="good-item__price"><%= good.Samsung_Galaxy_A23.price %> руб.</div>
              <button 
                  class="good-item__btn-add btn btn-info btn-sm js-add-to-cart"
                  data-id="<%= good.Samsung_Galaxy_A23.id %>"
                  data-name="<%- good.Samsung_Galaxy_A23.name %>"
                  data-price="<%= good.Samsung_Galaxy_A23.price %>"
              >Добавить в корзину</button>
          </div>
      </li>
  <% }); %>
</script>
</div>
    <hr>
    <h2 class="specifications-name">Характеристики</h2>
    <div class="specifications">
      <ul> Заводские данные</ul>
      <div class="specifications-name-div">
        <li> Гарантия от производителя: 12 мес. </li>
      </div>
      <div>
        <ul>Общие параметры</ul>
      </div>
      <div class="specifications-name-div">
        <li> Тип: смартфон</li>
      </div>
      <div class="specifications-name-div">
        <li> Модель: Xiaomi Redmi Note 10 Pro</li>
      </div>
      <div class="specifications-name-div">
        <li> Год релиза: 2021</li>
      </div>
      <ul> Корпус и защита </ul>
      <div class="specifications-name-div">
        <li> Материал корпуса: стекло</li>  </div>
        <div class="specifications-name-div">
          <li>Защищенность: защита от пыли и влаги, защитное покрытие экрана от царапин</li>
        </div>
        <ul> Система</ul>
        <div class="specifications-name-div">
          <li> Операционная система: Android</li>
        </div>
        <div class="specifications-name-div">
          <li> Версия ОС: Android 11</li>
        </div>
        <div class="specifications-name-div">
          <li> Производитель процессора: Qualcomm</li>
        </div>
        <div class="specifications-name-div">
          <li> Модель процессора: Snapdragon 732G</li>
        </div>
        <div class="specifications-name-div">
          <li> Количество ядер: 8</li>
        </div>
        <div class="specifications-name-div">
          <li> Конфигурация процессора: 6x Kryo 470 (Cortex-A55) 1.8 ГГц, 2x Kryo 470 (Cortex-A76) 2.3 ГГц</li>
        </div>
        <div class="specifications-name-div">
          <li> Техпроцесс: 8 нм</li>
        </div>
        <div class="specifications-name-div">
          <li> Графический ускоритель: Adreno 618</li>
        </div>
        <div class="specifications-name-div">
          <li> Объем оперативной памяти: 8 Гб</li>
        </div>
        <div class="specifications-name-div">
          <li> Объем встроенной памяти: 128 ГБ</li>
        </div>
        <div class="specifications-name-div">
          <li> Слот для карты памяти: есть</li>
        </div>
        <div class="specifications-name-div">
          <li> Датчики: датчик освещенности, датчик приближения, компас, акселерометр, гироскоп</li>
        </div>
        <ul> Питание</ul>
        <div class="specifications-name-div">
          <li>Тип аккумулятора: Li-polymer</li>
        </div>
        <div class="specifications-name-div">
          <li>Емкость аккумулятора: 5020 мА*ч</li>
        </div>
        <div class="specifications-name-div">
          <li>Съемный аккумулятор: нет</li>
        </div>
        <div class="specifications-name-div">
          <li>Выходная мощность ЗУ: 33 Вт</li>
        </div>
        <div class="specifications-name-div">
          <li>Поддержка быстрой зарядки: Turbo Charge</li>
        </div>
      </div>
      <hr>
      <div class="recomendation_p"> <h3>Рекомендованные</h3></div>
      <div class="recomendation">
        <a href="#" class="recomendation_img"> <img src="img/Google_Pixel_6.png" alt="" height="200px">
          <p>Смартфон Google Pixel 6 128 ГБ черный</p>
        </a>
        <a href="#" class="recomendation-img"> <img src="img/Huawei P50 Pro.png" alt="" height="200px">
          <p>Смартфон Huawei P50 Pro 256 ГБ черный</p>
        </a>
        <a href="#" class="recomendation-img"> <img src="img/Infinix HOT 20S.png" alt="" height="200px">
          <p>Смартфон Infinix HOT 20S 128 ГБ голубой</p>
        </a>
      </div>
      <hr>
  </main>

  <footer>
    <div class="footer-div">
      <p> Наш номер: <a href="tel:89869542538"> 8-(986)-(954)-25-38 </a> (с 8:00 до 23:00)</p>
      <p>Copyright © 2023 Narek Sogoyan</p>
      <p>TeleSales - компания с разнообразными смартфонами по низким ценам!</p>
    </div>
  </footer>
</body>

<script src="js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
<script src="js/vendor/underscore.min.js" type="text/javascript"></script>
<script src="js/modules/catalog.js" type="text/javascript"></script>
<script src="js/modules/cart.js" type="text/javascript"></script>
<script src="js/modules/compare.js" type="text/javascript"></script>
<script src="js/modules/main.js" type="text/javascript"></script>
</html>Samsung_Galaxy_A13