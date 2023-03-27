<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "","internet_mag");
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно ". "<br>");

$name = $_POST["name"];
$price = $_POST["price"];

if(isset($_POST['upload'])){
  //$img_type = substr($_FILES['img_upload']['type'], 0, 5);
  //$img_size = 2*1024*1024;
  if(!empty($_FILES['img_upload']['tmp_name'])){ 
  $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));

  }

}

if (isset($_GET['del'])) { //проверяем, есть ли переменная
  //удаляем строку из таблицы
  $sql_1 = mysqli_query($link, "DELETE FROM `tovar` WHERE `Id` = {$_GET['del']}");
  if ($sql_1) {
    echo "<p>Товар удален.</p>";

  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
  }
}
$result = mysqli_query($link,"SELECT * FROM tovar") or die(mysqli_error($link));
for ($data=array(); $row = mysqli_fetch_assoc($result); $data[]=$row); 
echo ("<table align='center'>");
  echo ("<tr align='center'>");
  echo ("<th align='center'>");
    echo "<br/>";
    echo $sql;
    echo "<br/>";
  echo ("</th>");
  echo ("</tr>");
  echo ("<tr align='center'>");
  echo ("<td>");
    //echo "<b> Код товара: " . $row['Id'] . "<br/>";
    echo "<b> Имя товара: ".$name."<br/>";
    echo "<b> Цена: ".$price."<br/>";
    echo "<br/>";
  echo ("</td>");
  echo ("</tr>");
echo ("</table>");


echo ("<table align='center' border = '1'>");
    echo ("<tr  align='center'>");

    echo ("<th>");
        echo ('Код');
    echo ("</th>");
    echo ("<th>");
        echo ('Товар');
    echo ("</th>");
    echo ("<th>");
        echo ('Сумма');
    echo ("</th>");
    echo ("<th>");
        echo ('Изображение');
    echo ("</th>");
    echo("</tr>");

?>

<?php foreach ($data as $user) { ?>
<tr  align='center'>
<td>  
        <?php print("{$user['Id']}");?>
</td>
<td>
        <?php print("{$user['name_tovara']}");?>
</td>
<td>
        <?php print ("{$user['price_tovara']}");?>
</td>
<td> 
<?php
    $show_img = base64_encode($user['img']);?>
		<img src="data:image/jpeg;base64, <?=$show_img ?>" alt="">

</td>
<td>
      <a href="?del=<?= $user['Id'] ?>"><button> Удалить</button></a>
    </td>
</tr>

<?php } ?>
<table align=center>
<tr>
    <td>
      <a href='index.html'><button>На главную</button></a>
    </td>
</tr>
</table>
</table>

<?php } ?>