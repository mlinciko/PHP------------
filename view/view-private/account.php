<button class="exit"><a href="/controller/signin/signout.php">Выйти</a></button>
<div class="account">
  <div class="title">Личный кабинет</div>
  <div class="info">
    <div class="name">Имя: <span>
        <?php
        echo $_SESSION['name'];
        ?>
      </span></div>
    <div class="tel">Телефон: <span>
        <?php
        echo $_SESSION['tel'];
        ?>
      </span></div>
    <div class="email">Email: <span>
        <?php
        echo $_SESSION['email'];
        ?>
      </span></div>
  </div>
  <button class="change">Изменить</button>
  <form action="/controller/data-query/change-data.php" method="post">
    <label for="name">ФИО</label>
    <input id="name" type="text" name="name" placeholder="Введите ФИО">
    <label for="tel">Телефон</label>
    <input id="tel" type="tel" name="tel" placeholder="Введите телефон">
    <label for="email">Email</label>
    <input id="email" type="text" name="email" placeholder="Введите email">
    <button type="submit" class="save">Сохранить</button>
    <button class="cancel">Отмена</button>
    <div class="alert"></div>
  </form>
</div>