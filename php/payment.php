<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TeleSales</title>
  <link rel="icon" href="../img/logo (2).png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/payment.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/main.css">
</head>

<body data-page="cart">
<?php 
include("header.php"); 
?>
  <main>
    <div>
      <p class="breadcrumbs">Корзина-Оформление доставки</p>
      <hr>
    </div>
    <div class="main_bracket_2">
      <form action="san3 (1).php" method="post" id="order-form" class="form-horizontal">
        <div id="cart">
          <ul>
            <img src="img/loading.gif" alt="" />
          </ul>
        </div>

        <div id="order-message" class="alert alert-info">

          <script id="cart-template" type="text/template">
            <% _.each(goods, function(good) { %>
            <table>
              <tr>
                <th>
                  Название
                </th>
                <th>
                  Цена
                </th>
                <th>
                  Количество
                </th>
              </tr>
              <tr class="cart-item js-cart-item" data-id="<%= good.id %>">
                  <td><input type="text" value="<%- good.name %>" name="name_tovara" size="40" readonly></td><br>
                  <td><span class="js-summa"><input type="number" name="summa" value="<%= good.count * good.price %>" readonly></span> руб.</td>
                  <td class="js-count"> <input type="number" name="col" value="<%= good.count %>" readonly> </td>
              </tr>
            </table><br>
          <% }); %>
        </script>
          <?php if ($_COOKIE['user'] == '') : ?>
            <p class="fio">Ваше ФИО:</p><input type="text" name="fio" required><br><br>
            <p class="place_live">Ваша улица проживания:</p><input type="text" name="place_live" required><br><br>
            <p class="date_birthday">Дата вашего рождения:</p><input type="date" name="date_birthday" required><br><br>
            <p class="mobile_num">Ваш номер мобильного телефона:</p><input type="number" name="number" required><br>
            <input type="submit" name="upload" class="buy" value="Купить"></input>
          <?php else : ?>
            <p>Ваше имя: <input type="text" value="<?= $_COOKIE['user'] ?>" name="fio"></p><br>
            <p>Ваш номер мобильного телефона: <input type="number" name="number" required><br></p>
            <input type="submit" name="upload" class="buy" value="Купить"></input>
      </form>
    <?php endif; ?>
    </div>

    <hr>
    <!--<div class="main_map">
    <p>Прийти и самим купить:</p>
    <p><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A75dcae313fc403f42d439db3dbf084d18f815b03049848b1030409fe6f7c0f3d&amp;width=582&amp;height=491&amp;lang=ru_RU&amp;scroll=true"></script></p>
    </div>-->

  </main>

  <footer>
    <div class="footer-div">
      <ul class="footer-div-ul">
        <li class="footer-div-li">Наш номер: <a href="tel:89869542538"> 8-(986)-(954)-25-38 </a> (с 8:00 до 23:00)</li>
        <li class="footer-div-li">Copyright © 2023 Narek Sogoyan</li>
        <li class="footer-div-li">TeleSales - компания с разнообразными смартфонами по низким ценам!</li>
      </ul>
    </div>
  </footer>

</body>
<script src="../js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="../js/vendor/jquery.cookie.js" type="text/javascript"></script>
<script src="../js/vendor/underscore.min.js" type="text/javascript"></script>
<script src="../js/modules/cart.js" type="text/javascript"></script>
<script src="../js/modules/compare.js" type="text/javascript"></script>
<script src="../js/modules/main.js" type="text/javascript"></script>

</html>