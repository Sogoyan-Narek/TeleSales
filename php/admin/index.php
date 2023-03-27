<!DOCTYPE html>
<html>

<head>
  <title>Форма</title>
  <meta charset="utf-8">
</head>
<header>
  <div class="header">
    <ul>
      <li>
        <a href="../exit_2.php"> На главную страницу</a>
      </li>
    </ul>
  </div>
</header>
<body>
  <div class="prodaji">
    <table border="0" align="center">
      <tr>
        <th colspan="5">
          <h2>Введите данные о купленном товаре:</h2>
        </th>
      </tr>
      <tr>
        <th>
          <p>Введите Товар</p>
        </th>
        <th>
          <p>Введите ФИО покупателя</p>
        </th>
        <th>
          <p>Количество</p>
        </th>
        <th>
          <p>Сумма</p>
        </th>
        <th>
          <p>Дата продажи</p>
        </th>
      </tr>
      <tr>
        <td>
          <form action="san3 (1).php" method="POST">
            <input type="text" name="tovform" />
        </td>
        <td>
          <input type="text" name="FIO" />
        </td>
        <td>
          <input type="number" name="col" />
        </td>
        <td>
          <input type="number" name="summa" />
        </td>
        <td>
          <input type="date" name="dateb" />
        </td>
        <td>
          <input type="submit" value="Отправить" />
        </td>
      </tr>
      </form>
  </div>
  <div class="tovar">
    </table>
    <table border="0" align="center">
      <tr>
        <th colspan="5">
          <h2> Введите данные о товаре:</h2>
        </th>
      </tr>
      <tr>
        <th>Имя товара</th>
        <th>Цена товара</th>
        <th>Загрузите фотографию товара</th>
      </tr>
      <tr>
        <td>
          <form action="san4 (1).php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name">
        </td>
        <td>
          <input type="number" name="price">
        </td>
        <td>
          <input type="file" name="img_upload">
        </td>
        <td>
          <input type="submit" name="upload" value="Отправить">
        </td>
      </tr>
      </form>
    </table>
  </div>
  <div class="clients">
    <table border="0" align="center">
      <tr>
        <th colspan="5">
          <h2> Введите данные о клиенте:</h2>
        </th>
      </tr>
      <tr>
        <th>ФИО</th>
        <th>Телефон</th>
        <th>Адрес</th>
        <th>Дата рождения</th>
      </tr>
      <tr>
        <td>
          <form action="san5 (1).php" method="POST" enctype="multipart/form-data">
            <input type="text" name="fio">
        </td>
        <td>
          <input type="number" name="number">
        </td>
        <td><input type="text" name="address"></td>
        <td><input type="date" name="date_birthday"></td>
        <td>
          <input type="submit" value="Отправить">
        </td>
      </tr>
      </form>
    </table>
  </div>
</body>
</html>