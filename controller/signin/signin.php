<?php
  session_start();
  include("controller/data-query/query.php");

  $login = $_POST['login'];
  $password = $_POST['password'];
  
  if(query($login, $password, "findByLoginAndPassword") && !empty($login) && !empty($password)){
    $_SESSION['id'] = random_int(100000, 999999);
    //ищем данные о пользователе в базе данных
    $user = find($login);
    //записываем найденные данные в глобальную переменную
    $_SESSION['login'] = $user[0];
    $_SESSION['name'] = $user[2];
    $_SESSION['tel'] = $user[3];
    $_SESSION['email'] = $user[4];
    header('Location: /view/view-private/index.php');
  }
  else{ 
    $_SESSION['alert']='Неверные данные';
    header('Location: /');
  }
?>