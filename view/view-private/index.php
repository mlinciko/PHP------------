<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: /');
  $_SESSION['alert'] = 'Введите логин и пароль';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/css-public/null-style.css">
  <link rel="stylesheet" href="/css/css-public/form-style.css">
  <link rel="stylesheet" href="/css/css-private/account-style.css">
  <title>Личный кабинет</title>
</head>

<body>
  <?php
  $data = '';

  if (!empty($_GET['action'])) {
    $data = $_GET['action'];
  };

  require("view/view-private/account.php");

  ?>
  <script src="/js/script-change-data.js"></script>
</body>

</html>