<?php
session_start();
require("san4 (1).php");
//if (isset($_GET['page'])) {

//  $pages = array("tovar", "cart");

//  if (in_array($_GET['page'], $pages)) {

//    $_page = $_GET['page'];
//  } else {

//    $_page = "tovar";
//  }
//} else {

//  $_page = "tovar";
//}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initital-scale=1.0">
  <title>TeleSales</title>
  <link rel="icon" href="../img/logo (2).png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../ui-components-master/itc-slider/itc-slider.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <header>
    <div class="div_header">
      <nav>
        <ul>
          <li>
            <a href="index.php">
              <img src="../img/logo.png" alt="TeleSales" height="200px">
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
            <a href="index.php" class="a_smartphone">СМАРТФОНЫ</a>
          </li>
          <li class="li_nav">
            <a href="../accessories.html">АКСЕССУАРЫ</a>
          </li>
          <li class="li_nav">
            <a href="bracket.php">КОРЗИНА</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div>
      <p class="breadcrumbs">Смартфоны</p>
    </div>
    <hr>
    <div>
      <ul class="phone_brend">
        <p>Производитель</p>
        <li>
          <p> Apple</p>
        </li>
        <li>
          <p> Samsung</p>
        </li>
        <li>
          <p> Oppo</p>
        </li>
        <li>
          <p> Huawei</p>
        </li>
        <li>
          <p> Wiko</p>
        </li>
        <li>
          <p> Goggle Pixel</p>
        </li>
        <li>
          <p> Infinix</p>
        </li>
        <li>
          <p> Realme</p>
        </li>
      </ul>

    </div>
    <div class="itc-slider" data-slider="itc-slider" data-loop="true" data-autoplay="false" data-interval="7000">
      <div class="itc-slider__wrapper">
        <div class="itc-slider__items">
          <div class="itc-slider__item">
            <div class="itc-slider__block_1">
<?php
  $result = mysqli_query($link,"SELECT * FROM tovar") or die(mysqli_error($link));
  for ($data=[]; $row = mysqli_fetch_assoc($result); $data[]=$row); 
  foreach ($data as $user) {
  $show_img = base64_encode($user['img']);
?>
              <a href="tovar.php">
                <img class="slider_img" src="../img/iPhone13.png" alt="">
              </a>
              <a href="tovar.php" class="img-phone">
                <p class="itc-slider__p">70000 руб. <br> Смартфон Apple iPhone 13 256 ГБ белый <br> Ядер - 6x(3.2 ГГц, 1.8 ГГц)</p>
              </a>
              <a href="tovar.php">
                <img class="slider_img_1" src="../img/Huawei P50.png" alt="">
              </a>
              <a href="tovar.php" class="img-phone">
                <p class="itc-slider__p_1">30000 руб. <br> Смартфон Huawei P50 Pocket 512 ГБ золотистый <br> Ядер - 8x(2.84 ГГц, 2.42 ГГц, 1.8 ГГц)</p>
              </a>
            </div>
            <div class="itc-slider__block_1">
              <a href="tovar.php">
                <img class="slider_img" src="../img/Samsung_GalaxyS22.png" alt="">
              </a>
              <a href="tovar.php" class="img-phone">
                <p class="itc-slider__p">40000 руб. <br> Смартфон Samsung Galaxy S22 128 ГБ белый <br> Ядер - 8x(2.8 ГГц)</p>
              </a>
              <a href="tovar.php">
                <img class="slider_img_1" src="../img/Xiaomi Redmi Note 10.png" alt="">
              </a>
              <a href="tovar.php" class="img-phone">
                <p class="itc-slider__p_1">30000 руб. <br> Смартфон Xiaomi Redmi Note 10 Pro 128 ГБ серый <br> Ядер - 8x(2.3 ГГц, 1.8 ГГц)</p>
              </a>
            </div>
            <div class="itc-slider__block_1">
              <a href="tovar.php">
                <img class="slider_img" src="../img/Samsung_GalaxyA13.png" alt="">
              </a>
              <a href="tovar.php" class="img-phone">
                <p class="itc-slider__p">18000 руб. <br> Смартфон Samsung Galaxy A13 128 ГБ белый <br> Ядер - 8x(2 ГГц)</p>
              </a>
              <a href="tovar.php">
                <img class="slider_img_1" src="../img/Realme 9 pro.png" alt="">
              </a>
              <a href="tovar.php" class="img-phone">
                <p class="itc-slider__p_1">25000 руб. <br> Смартфон realme 9 Pro 128 ГБ черный <br> Ядер - 8x(1.8 ГГц, 2.2 ГГц)</p>
              </a>
            </div>
            <div class="itc-slider__block_1">
              <a href="tovar.php">
                <img class="slider_img" src="../img/Samsung_GalaxyA23.png" alt="">
              </a>
              <a href="tovar.php" class="img-phone">
                <p class="itc-slider__p">24000 руб. <br> Смартфон Samsung Galaxy A23 128 ГБ белый <br> Ядер - 8x(2.4 ГГц, 1.9 ГГц)</p>
              </a>

              <a href="tovar.php">
                <img class="slider_img_1" src="../img/Realme GT Master Edition.png" alt="">
              </a>
              <?php
              //$sql = "SELECT * FROM Tovar ORDER BY name_tovara ASC";
              //$query = mysqli_query($link, $sql);
              ?>
              <!--<a href="index.php?page=tovar&action=add&id=<?php //echo $row['Id'] ?>" class="img-phone">-->
                <p class="itc-slider__p_1">32999 руб. <br> Смартфон realme GT Master Edition 256 ГБ серый <br> Ядер - 8x(2.4 ГГц, 1.8 ГГц)</p>
              </a>
            </div>

          </div>
          <div class="itc-slider__item">

            <div class="itc-slider__block_phone">
              <a href="tovar.html">
                <img class="slider_img" src="../img/OPPO A17.png" alt="">
              </a>
              <a href="tovar.html" class="img-phone">
                <p class="itc-slider__p">45000 руб. <br> Смартфон OPPO A17K 64 ГБ голубой <br> Ядер - 8x(2.3 ГГц)</p>
              </a>
              <a href="tovar.html">
                <img class="slider_img_1" src="../img/Realme 8.png" alt="">
              </a>
              <a href="tovar.html" class="img-phone">
                <p class="itc-slider__p_1">30000 руб. <br> Смартфон realme 8 128 ГБ черный <br> Ядер - 8x(2.05 ГГц, 2 ГГц)</p>
              </a>
            </div>

            <div class="itc-slider__block_phone">
              <a href="tovar.html">
                <img class="slider_img" src="../img/Wiko 10.jpg" alt="">
              </a>
              <a href="tovar.html" class="img-phone">
                <p class="itc-slider__p">30000 руб. <br> Смартфон Wiko 10 128 ГБ серебристый <br> Ядер - 8x(2.3 ГГц)</p>
              </a>
              <a href="tovar.html">
                <img class="slider_img_1" src="../img/Huawei P smart.png" alt="">
              </a>
              <a href="tovar.html" class="img-phone">
                <p class="itc-slider__p_1">35000 руб. <br> Смартфон HUAWEI P smart 2021 128 ГБ черный <br> Ядер - 8x(2 ГГц, 1.7 ГГц)</p>
              </a>
            </div>
            <div class="itc-slider__block_phone">

              <a href="tovar.html">
                <img class="slider_img" src="../img/Google_Pixel_6.png" alt="">
              </a>
              <a href="tovar.html" class="img-phone">
                <p class="itc-slider__p">40000 руб. <br> Смартфон Google Pixel 6 128 ГБ черный <br> Ядер - 8x(1.8 ГГц, 2.8 ГГц, 2.25 ГГц)</p>
              </a>
              <a href="tovar.html">
                <img class="slider_img_1" src="../img/Huawei P50 Pro.png" alt="">
              </a>
              <a href="tovar.html" class="img-phone">
                <p class="itc-slider__p_1">50000 руб. <br> Смартфон Huawei P50 Pro 256 ГБ черный <br> Ядер - 8x(2.84 ГГц, 2.42 ГГц, 1.8 ГГц)</p>
              </a>
            </div>
            <div class="itc-slider__block_phone">

              <a href="tovar.html">
                <img class="slider_img" src="../img/Infinix HOT 20S.png" alt="">
              </a>
              <a href="tovar.html" class="img-phone">
                <p class="itc-slider__p">52000 руб. <br> Смартфон Infinix HOT 20S 128 ГБ голубой <br> Ядер - 8x(2 ГГц, 2.05 ГГц)</p>
              </a>
              <a href="php/tovar.php">
                <img class="slider_img_1" src="../img/Realme GT 5G.png" alt="">
              </a>
              <a href="php/tovar.php" class="img-phone">
                <p class="itc-slider__p_1">34000 руб. <br> Смартфон realme GT 5G 128 ГБ желтый <br> Ядер - 8x(2.84 ГГц)</p>
              </a>
            </div>
          </div>
        </div>
        <button class="itc-slider__btn itc-slider__btn_prev"></button>
        <button class="itc-slider__btn itc-slider__btn_next"></button>
      </div>
      <?php } ?>
  </main>
  <hr>
  <footer>
    <div class="footer-div">
      <p> Наш номер: <a href="tel:89869542538"> 8-(986)-(954)-25-38 </a> (с 8:00 до 23:00)</p>
      <p>Copyright © 2023 Narek Sogoyan</p>
      <p>TeleSales - компания с разнообразными смартфонами по низким ценам!</p>
    </div>
  </footer>

  <script src="../ui-components-master/itc-slider/itc-slider.js" defer></script>
</body>

</html>