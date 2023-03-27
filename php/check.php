<?php
require("constants.php");

$login= filter_var(trim($_POST['login']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
  echo "Недопустимая длина логина";
  exit();
} else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
  echo "Недопустимая длина имени";
  exit();
} else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
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

$link->query("INSERT INTO `users` (`login`,`name`,`pass`) VALUES ('$login', '$name', '$pass')");

$link->close();

header('Location: registriation.php');

}
?>