<?php
require("constants.php");

$login= filter_var(trim($_POST['login']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$pass = md5($pass."jir2jiej");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно ". "<br>");

$result = $link->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
  echo "Такой пользователь не найден";
  exit();
}

setcookie('admin', $user['login'], time() + 3600, '/');

$link->close();

header('Location: admin/index.php');

}
?>