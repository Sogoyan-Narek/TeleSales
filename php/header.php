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
            <?php 
            if($_COOKIE['user'] == ''):
            ?>
              <a href="registriation.php">Войти на сайт</a>
            <?php else: ?>
              <div>
              <h4>Имя аккаунта: <span><?=$_COOKIE['user'] ?> </span></h4>
              <p class="exit"><a href="exit.php">Выйти</a> из системы</p> 
              </div>
            <?php endif; ?>
          </li>
          <li>
            Социальные сети:
            <a href="https://vk.com/feed" target="_blank">VK,</a>
            <a href="https://www.viber.com/ru/" target="_blank">Viber</a><br><br>
            <a href="registration2.php">Вход для администратора</a>
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
            <a href="accessories.php">АКСЕССУАРЫ</a>
          </li>
          <li class="li_nav">
            <a href="bracket.php">КОРЗИНА</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>