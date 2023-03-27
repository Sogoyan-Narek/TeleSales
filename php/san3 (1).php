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
  <link rel="stylesheet" href="../css/accessories.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header>
    <div class="div_header">
      <nav>
        <ul>
          <li>
            <a href="../index.html">
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
            <a href="../index.html">СМАРТФОНЫ</a>
          </li>
          <li class="li_nav">
            <a href="../accessories.html">АКСЕССУАРЫ</a>
          </li>
          <li class="li_nav">
            <a href="../bracket.html">КОРЗИНА</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main>

<section>
  <div>
    <p style="text-align: center;">Товар был приобретен!</p>
  </div>
</section>
<section>
  <div>
  <?php
require("constants.php");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно ". "<br>");
$tovform =  $_POST["name_tovara"];
$FIO = $_POST["fio"];
$colvo = $_POST["col"];
$summa = $_POST["summa"];
$number = $_POST["number"];
$address = $_POST["place_live"];
$date = $_POST["date_birthday"];

$sql= mysqli_query($link, "insert into prodaji (Tovar, FIO, Kolvo, Summa) values ( '$tovform', '$FIO', $colvo, $summa)");
$result = mysqli_query($link,"SELECT * FROM prodaji") or die(mysqli_error($link));
for ($data=[]; $row = mysqli_fetch_assoc($result); $data[]=$row); 
echo ("<table align='center' border = '1'");
    echo ("<tr  align='center'>");
    echo ("<th>");
        echo ('Код');
    echo ("</th>");
    echo ("<th>");
        echo ('Товар');
    echo ("</th>");
    echo ("<th>");
        echo ('ФИО');
    echo ("</th>");
    echo ("<th>");
        echo ('Количество');
    echo ("</th>");
    echo ("<th>");
        echo ('Сумма');
    echo ("</th>");
    echo ("<th>");
        echo ('Дата_продажи');
    echo ("</th>");

    echo("</tr>");
    ?>
<?php foreach ($data as $user) { ?>
  <tr  align=center>

<td>
        <?php print("{$user['Id']}");?>
</td>
<td>
        <?php print("{$user['Tovar']}");?>
</td>
<td>
          <?php print ("{$user['FIO']}");?>
</td>
<td>
          <?php print ("{$user['Kolvo']}");?>
</td>

<td> 
          <?php print ("{$user['Summa']}");?>
</td>

<td> 
          <?php print ("{$user['Date_sale']}");?>
</td>
<?php } ?>
</tr>
</table>

<?php
//$sql= mysqli_query($link, "insert into clients (fio, number_tel, address_live, date_birthday) values ( '$FIO', $number, '$address', '$date')");
//$result = mysqli_query($link,"SELECT * FROM clients") or die(mysqli_error($link));
//for ($data=[]; $row = mysqli_fetch_assoc($result); $data[]=$row); 
//echo ("<table align='center' border = '1'");
//    echo ("<tr align='center'>");
//    echo ("<th>");
//        echo ('Код');
//    echo ("</th>");
//    echo ("<th>");
//        echo ('ФИО');
//    echo ("</th>");
//    echo ("<th>");
//        echo ('Номер телефона');
//    echo ("</th>");
//    echo ("<th>");
//        echo ('Адрес проживания');
//    echo ("</th>");
//    echo ("<th>");
//        echo ('Дата рождения');
//    echo ("</th>");

//    echo("</tr>");
    ?>
<?php foreach ($data as $user) { ?>
  <tr  align="center">    
<td>        
        <?php //print("{$user['Id']}");?>
</td>
<td>
        <?php //print("{$user['fio']}");?>
</td>
<td>
          <?php //print ("{$user['number_tel']}");?>
</td>
<td>
          <?php //print ("{$user['address_live']}");?>
</td>

<td> 
          <?php //print ("{$user['date_birthday']}");?>
</td>

</tr> 
<?php }
}
?>
</table>

  </div>
</section>
  </main>
<hr>
  <footer>
    <div class="footer-div">
      <p> Наш номер: <a href="tel:89869542538"> 8-(986)-(954)-25-38 </a> (с 8:00 до 23:00)</p>
      <p>Copyright © 2023 Narek Sogoyan</p>
      <p>TeleSales - компания с разнообразными смартфонами по низким ценам!</p>
    </div>
  </footer>
</body>




</html>


