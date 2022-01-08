<?php
  function add_to_base($login, $password, $name, $tel, $email)
  {
    $str = $login . ";" . $password . ";" . $name . ";" . $tel . ";". $email . "\n";
    $file = "data-base/login-data.csv";
    file_put_contents($file, $str, FILE_APPEND);
  }
?>