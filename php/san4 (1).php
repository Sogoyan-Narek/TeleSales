<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "","internet_mag");
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
  $result = mysqli_query($link,"SELECT * FROM tovar") or die(mysqli_error($link));
  for ($data=[]; $row = mysqli_fetch_assoc($result); $data[]=$row); 
  foreach ($data as $user) {
    $show_img = base64_encode($user['img']);
    "<img src='data:image/jpeg;base64', '$show_img'>";
    echo $user['name_tovara'].'<br />'; 
    echo $user['price_tovara'].'<br />';
    }


} ?>