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
  </header>
  <hr>
  <main>
<div class="container-reg">
<?php if($_COOKIE['user'] == ''): ?>
  <h1 class="form-h1">Форма регистрации</h1>
  <form action="check.php" method="post">
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
    <input type="text" class="form-control" name="name" id="name" placeholder="Введите ФИО" required><br>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль" required><br>
  <button type="submit">Зарегистрировать</button>
  </form>
  <h1 class="form-h1">Форма авторизации</h1>
  <form action="auth.php" method="post">
  <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
  <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль" required><br>
  <button type="submit">Войти</button>
  </form>
  <?php else: ?>
    <div id="welcome">
    <h2>Добро пожаловать, <span><?=$_COOKIE['user'] ?>! </span></h2>
    <p><a href="exit.php">Выйти</a> из системы</p> 
    </div>
  <?php endif; ?>
</div>
  </main>
  <hr>
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

</html>