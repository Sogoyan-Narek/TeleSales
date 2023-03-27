<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "","internet_mag");
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно ". "<br>");
$fio =  $_POST["fio"];
$number = $_POST["number"];
$address = $_POST["address"];
$date = $_POST["date_birthday"];


if (isset($_GET['del'])) { //проверяем, есть ли переменная
  //удаляем строку из таблицы
  $sql_1 = mysqli_query($link, "DELETE FROM `clients` WHERE `Id` = {$_GET['del']}");
  if ($sql_1) {
    echo "<p>Товар удален.</p>";

  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
  }
}
    echo ("<table align='center' ");
    echo ("<tr align='center'>");
    echo ("<th align='center'>");
            echo "<br/>";
            echo $sql;
            echo "<br/>";
        echo ("</th>");
        echo ("</tr>");
        echo ("<tr align='center'>");
        echo ("<td>");
            echo "<b> ФИО ".$fio."<br/>";
            echo "<b> Номер телефона ".$number."<br/>";
            echo "<b> Адрес проживания ".$address."<br/>";
            echo "<b> Дата рождения ".$date."<br/>";
            echo "<br/>";
         echo ("</td>");
         echo ("</tr>");
    
echo ("</table>");


$result = mysqli_query($link,"SELECT * FROM clients") or die(mysqli_error($link));
for ($data=[]; $row = mysqli_fetch_assoc($result); $data[]=$row); 
echo ("<table align='center' border = '1'");
    echo ("<tr  align='center'>");
    echo ("<th>");
        echo ('Код');
    echo ("</th>");
    echo ("<th>");
        echo ('ФИО');
    echo ("</th>");
    echo ("<th>");
        echo ('Номер телефона');
    echo ("</th>");
    echo ("<th>");
        echo ('Адрес проживания');
    echo ("</th>");
    echo ("<th>");
        echo ('Дата рождения');
    echo ("</th>");

    echo("</tr>");
    ?>
<?php foreach ($data as $user) { ?>
  <tr  align=center>    
<td>        
        <?php print("{$user['Id']}");?>
</td>
<td>
        <?php print("{$user['fio']}");?>
</td>
<td>
          <?php print ("{$user['number_tel']}");?>
</td>
<td>
          <?php print ("{$user['address_live']}");?>
</td>

<td> 
          <?php print ("{$user['date_birthday']}");?>
</td>

    <td> 
      <a href="?del=<?= $user['Id'] ?>"><button> Удалить</button></a>
    </td>
</tr> 

<?php } ?>
</table>
<table align=center>
<tr>
    <td>
      <a href='index.html'><button>На главную</button></a>
    </td>
</tr>
</table>
<?php } ?>
