<?php
setcookie('admin', $user['login'], time() - 3600, '/');
header('Location: registration2.php');
?>