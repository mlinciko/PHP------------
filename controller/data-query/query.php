<?php
function query($login, $password, $type)
{

  $f = fopen("data-base/login-data.csv", "rt") or die("Ошибка!");
  //в базе данных ищем введенные данные
  switch($type)
  {
    case 'findByLogin':
      for ($i = 0; ($data = fgetcsv($f, 200, ";")) !== false; $i++) {
        if ($data[0] == $login) {
          return true;
        }
      }
      break;
    case 'findByLoginAndPassword':
      for ($i = 0; ($data = fgetcsv($f, 200, ";")) !== false; $i++) {
        if ($data[0] == $login && $data[1] == $password) {
          return true;
        }
      }
      break;
    default:
      break;
  }

  fclose($f);
  return false;
}
function find($login){
  $user = [];
  $f = fopen("data-base/login-data.csv", "rt") or die("Ошибка!");
  
  for ($i = 0; ($data = fgetcsv($f, 200, ";")) !== false; $i++) {
    if ($data[0] == $login) {
      $user[0] = $data[0];//login
      $user[1] = $data[1];//password
      $user[2] = $data[2];//name
      $user[3] = $data[3];//telephone
      $user[4] = $data[4];//email
      return $user;
    }
  }
    fclose($f);
    return "";
}
?>