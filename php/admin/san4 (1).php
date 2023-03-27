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
$quantity = 1;
if(isset($_POST['upload'])){
  if(!empty($_FILES['img_upload']['tmp_name'])){ 
  $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
  }
}

$sql= mysqli_query($link, "insert into tovar (name_tovara, price_tovara, img, quantity) values ( '$name', $price, '$img', $quantity)");

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

</tr>

<?php } ?>
</table>
<table align=center>
<tr>
    <td>
      <a href='index.html'><button>На главную</button></a>
      <a href='san4 (2).php'><button>Страница удаления строки</button></a>
    </td>

</tr>
</table>

<?php } ?>