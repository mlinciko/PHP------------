<?php
  session_start();
  include("controller/data-query/add-data-base.php");
  include("controller/data-query/query.php");

  $login = $_POST['login'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $tel = $_POST['tel'];
  if(query($login, "", 'findByLogin')){
    $_SESSION['alert'] = 'Пользователь с таким логином уже зарегистрирован';
    header('Location:/?action=reg');
  }
  else{
    add_to_base($login, $password, $name, $tel, $email);
    header('Location:/');
  }

?>