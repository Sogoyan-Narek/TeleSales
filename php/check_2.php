<?php
require("constants.php");

$login= filter_var(trim($_POST['login']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (mb_strlen($login) < 4 || mb_strlen($login) > 90) {
  echo "Недопустимая длина логина";
  exit();
} else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 15) {
  echo "Недопустимая длина пароля (от 2 до 6 символов)";
  exit();
}

$pass = md5($pass."jir2jiej");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно ". "<br>");

$link->query("INSERT INTO `admin` (`login`,`password`) VALUES ('$login', '$pass')");

$link->close();

header('Location: header.php');

}
?>