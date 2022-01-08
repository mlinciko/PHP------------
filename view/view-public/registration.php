<form action="../../controller/signin/reg.php" method="post">
  <div class="title">Регистрация</div>
  <label for="login">Логин</label>
  <input id="login" type="text" name="login" placeholder="Введите логин">
  <label for="name">Имя</label>
  <input id="name" type="text" name="name" placeholder="Введите имя">
  <label for="email">Номер телефона</label>
  <input id="tel" type="tel" name="tel" placeholder="Введите номер телефона">
  <label for="email">Email</label>
  <input id="email" type="email" name="email" placeholder="Введите email">
  <label for="password">Пароль</label>
  <input id="password" type="password" name="password" placeholder="Введите пароль">
  <label for="password-confirm">Повторите пароль</label>
  <input id="password-confirm" type="password" name="password-confirm" placeholder="Введите пароль ещё раз">
  <div class="alert">
    <?php
    if (!empty($_SESSION['alert'])) {
      echo $_SESSION['alert'];
      unset($_SESSION['alert']);
    }
    ?>
  </div>
  <input style="width:40%; margin-right:50%;" type="submit" value="Зарегистироваться">
  <div class="reg">Уже есть аккаунт? <a href="/?action=signin">Войти</a></div>
</form>