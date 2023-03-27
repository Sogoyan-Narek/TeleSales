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
  <link rel="stylesheet" href="css/style.css">
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
            <a href="php/accessories.php">АКСЕССУАРЫ</a>
          </li>
          <li class="li_nav" >
            <a href="php/bracket.php">КОРЗИНА</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div>
      <p class="breadcrumbs">Смартфон-iPhone 13</p>
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
              <img class="good-item__img" src="<%- good.iPhone_13.img %>" />
          </div>
          <div class="col-md-8">
              <a class="good-item__id" href="/product/<%= good.iPhone_13.id %>">Артикул <%= good.iPhone_13.id %></a>
              <div class="good-item__name"><%- good.iPhone_13.name  %></div>
              <div class="good-item__price"><%= good.iPhone_13.price  %> руб.</div>
              <button 
                  class="good-item__btn-add btn btn-info btn-sm js-add-to-cart"
                  data-id="<%= good.iPhone_13.id  %>"
                  data-name="<%- good.iPhone_13.name %>"
                  data-price="<%= good.iPhone_13.price %>"
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
        <li> Модель: Apple iPhone 13</li>
      </div>
      <div class="specifications-name-div">
        <li> Год релиза: 2021</li>
      </div>
      <ul> Корпус и защита </ul>
      <div class="specifications-name-div">
        <li> Материал корпуса: металл, стекло</li>  </div>
        <div class="specifications-name-div">
          <li>Защищенность: защита от пыли и влаги, защитное покрытие экрана от царапин, олеофобное покрытие</li>
        </div>

        <ul> Система</ul>
        <div class="specifications-name-div">
          <li> Операционная система: iOS</li>
        </div>
        <div class="specifications-name-div">
          <li> Версия OC:  iOS 15</li>
        </div>
        <div class="specifications-name-div">
          <li> Производитель процессора: Apple</li>
        </div>
        <div class="specifications-name-div">
          <li> Модель процессора: Apple A15 Bionic</li>
        </div>
        <div class="specifications-name-div">
          <li> Количество ядер: 6</li>
        </div>
        <div class="specifications-name-div">
          <li> Частота работы процессора: 1.8 ГГц, 3.2 ГГц</li>
        </div>
        <div class="specifications-name-div">
          <li> Техпроцесс: 5 нм</li>
        </div>
        <div class="specifications-name-div">
          <li> Графический ускоритель: Apple GPU</li>
        </div> 
        <div class="specifications-name-div">
          <li> Объем встроенной памяти: 128 ГБ</li>
        </div>
        <div class="specifications-name-div">
          <li> Слот для карты памяти: нет</li>
        </div>
        <div class="specifications-name-div">
          <li> Датчик: освещенности, датчик приближения, барометр, акселерометр, гироскоп</li>
        </div>
        <ul> Питание</ul>
        <div class="specifications-name-div">
          <li>Тип аккумулятора: Li-Ion</li>
        </div>
        <div class="specifications-name-div">
          <li>Съемный аккумулятор: нет</li>
        </div>
        <div class="specifications-name-div">
          <li>Поддержка беспроводной зарядки: есть</li>
        </div>
        <div class="specifications-name-div">
          <li>Поддержка быстрой зарядки: есть</li>
        </div>
        <div class="specifications-name-div">
          <li>Время работы при прослушивании музыки: 75 ч</li>
        </div>
        <div class="specifications-name-div">
          <li>Время работы при воспроизведении видео: 19 ч</li>
        </div>
      </div>
      <hr>
      <div class="recomendation_p"> <h3>Рекомендованные</h3></div>
      <div class="recomendation">
        <a href="Google_Pixel_6.html" class="recomendation_img"> <img src="img/Google_Pixel_6.png" alt="" height="200px">
          <p>Смартфон Google Pixel 6 128 ГБ черный</p>
        </a>
        <a href="Huawei_P50_Pro.html" class="recomendation-img"> <img src="img/Huawei P50 Pro.png" alt="" height="200px">
          <p>Смартфон Huawei P50 Pro 256 ГБ черный</p>
        </a>
        <a href="Infinix_HOT_20S.html" class="recomendation-img"> <img src="img/Infinix HOT 20S.png" alt="" height="200px">
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
</html>