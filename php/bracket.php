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
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/payment.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body data-page="cart">
<?php 
include("header.php"); 
?>
  <main>
    <div>
      <p class="breadcrumbs">Корзина</p>
    </div>
    <hr>
    <div class="main_bracket">
      <div class="table-responsive">
      <table class="table table-hover table-bordered">
          <thead>
              <tr>
                  <th>Артикул</th>
                  <th>Название</th>
                  <th>Цена</th>
                  <th>Количество</th>
                  <th>Сумма</th>
                  <th></th>
              </tr>
          </thead>
          <tbody id="cart" align="center">
              <tr><td colspan="6"><img src="img/loading.gif" alt=""></td></tr>
          </tbody>
      </table>
  </div>
  <div>Итого: <span id="total-cart-summa">0</span> руб.</div>
    <div><a id="order-btn" class="btn btn-info" href="payment.php">Оформить заказ</a></div>
</div>
</div>
<script id="cart-template" type="text/template">
  <% _.each(goods, function(good) { %>
      <tr class="cart-item js-cart-item" data-id="<%= good.id %>">
          <td><%= good.id %></td>
          <td><%- good.name %></td>
          <td><%= good.price %> руб.</td>
          <td>
              <span 
                  class="cart-item__btn-dec-count js-change-count" 
                  title="Уменьшить на 1" 
                  data-id="<%= good.id %>" 
                  data-delta="-1"
              >
                  <span class="glyphicon glyphicon-minus"></span>
              </span>
              <span class="js-count"><%= good.count %></span>
              <span 
                  class="cart-item__btn-inc-count js-change-count" 
                  title="Увеличить на 1" 
                  data-id="<%= good.id %>" 
                  data-delta="1"
              >
                  <span class="glyphicon glyphicon-plus"></span>
              </span>
          </td>
          <td><span class="js-summa"><%= good.count * good.price %></span> руб.</td>
          <td>
              <span class="cart-item__btn-remove js-remove-from-cart" title="Удалить из корзины" data-id="<%= good.id %>">
                  <span class="glyphicon glyphicon-remove"></span>    
              </span> 
          </td>
      </tr>
            
  <% }); %>
</script>
<script id="order-message-template" type="text/template">
        <% if (count !== 0) { %>
            В Вашей корзине <%= count %> товара(ов) на общую сумму <%= summa %> рублей.
            Заполните форму ниже и нажмите кнопку Отправить заказ.
        <% } else { %>
            Ваша корзина пуста. Перед отправкой заказа добавьте в корзину хотя бы один товар.
        <% } %>
    </script>
    <hr>
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
<script src="../js/vendor/underscore.min.js" type="text/javascript"></script>
<script src="../js/modules/catalog.js" type="text/javascript"></script>
<script src="../js/modules/cart.js" type="text/javascript"></script>
<script src="../js/modules/main.js" type="text/javascript"></script>
</html>