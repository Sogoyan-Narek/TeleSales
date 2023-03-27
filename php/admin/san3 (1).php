<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "","internet_mag");
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно ". "<br>");
$tovform =  $_POST["tovform"];
$FIO = $_POST["FIO"];
$colvo = $_POST["col"];
$summa = $_POST["summa"];
$dateb = $_POST["dateb"];
$image = $_POST["image"];
if(isset($_POST['upload'])){
  //$img_type = substr($_FILES['img_upload']['type'], 0, 5);
  //$img_size = 2*1024*1024;
  if(!empty($_FILES['img_upload']['tmp_name'])){ 
  $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));

  }

}
$sql= mysqli_query($link, "insert into prodaji (Tovar, FIO, Kolvo, Summa, Date_sale) values ( '$tovform', '$FIO', $colvo, $summa, '$dateb')");

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
            echo "<b> Товар ".$tovform."<br/>";
            echo "<b> ФИО ".$FIO."<br/>";
            echo "<b> Количество ".$colvo."<br/>";
            echo "<b> Сумма ".$summa."<br/>";
            echo "<b> Дата_продажи ".$dateb."<br/>";
            echo "<br/>";
         echo ("</td>");
         echo ("</tr>");
    
echo ("</table>");


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
<!--<td>
<?php
    $show_img = base64_encode($user['img']);?>
		<img src="data:image/jpeg;base64, <?=$show_img ?>" alt="">
</td>-->
</tr> 

<?php } ?>
</table>
<table align=center>
<tr>
    <td>
      <a href='index.html'><button>На главную</button></a>
      <a href='san3 (2).php'><button>Страница удаления строки</button></a>
    </td>
</tr>
</table>
<?php } ?>




