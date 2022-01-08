<?php
  session_start();

  $login = $_SESSION['login'];
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];

  //ищем значения полей пользователя
  $f = fopen("data-base/login-data.csv", "c+") or die("Ошибка!");
  for ($i = 0; ($data = fgetcsv($f, 200, ";")) !== false; $i++) {
    if ($data[0] == $login) {
      //записываем значения в переменную для дальнейшего поиска
      $user = $data[0].";".$data[1].";".$data[2].";".$data[3].";".$data[4];
      //записываем обновлённые значения полей
      $appdate_user = $data[0] . ";" . $data[1] . ";" . $name . ";" . $tel . ";" . $email;
    }
  }
  fclose($f);

  //открываем файл для записи
  $f = "data-base/login-data.csv";

  $file = file_get_contents($f);
  //ищем запись по строке и меняем её на обновленную
  $file = str_replace($user, $appdate_user, $file);

  file_put_contents($f, $file);
  
  //обновляем значения сессии
  $_SESSION['name'] = $name;
  $_SESSION['tel'] = $tel;
  $_SESSION['email'] = $email;
  header('Location: /view/view-private/index.php');
?>

