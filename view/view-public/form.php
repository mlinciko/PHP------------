<form action="../../controller/signin/signin.php" method="post">
  <div class="title">Авторизация</div>
  <label for="login">Логин</label>
  <input id="login" type="text" name="login" placeholder="Введите логин">
  <label for="password">Пароль</label>
  <input id="password" type="password" name="password" placeholder="Введите пароль">
  <div class="alert">
    <?php
    if (!empty($_SESSION['alert'])){
       echo $_SESSION['alert'];
      unset($_SESSION['alert']);
    }
    ?>
  </div>
  <input type="submit" value="Войти">
  <div class="reg">Ещё нет аккаунта? <a href="/?action=reg">Зарегистрироваться</a></div>
</form>