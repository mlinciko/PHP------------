
//добавляем событие для формы
document.querySelector('form').onsubmit = function(){
  //получаем введённые данные
  let login = document.getElementById('login').value;
  let fullName = document.getElementById('name').value;
  let tel = document.getElementById('tel').value;
  let email = document.getElementById('email').value;
  let password = document.getElementById('password').value;
  let passwordConfirm = document.getElementById('password-confirm').value;

  //сообщение об ошибке
  let message = document.querySelector('.alert');

  //проверяем данные на валидность
  switch (validateData(login, fullName, email, tel, password, passwordConfirm)){
    case 0:
      //отправляет данные формы
      document.querySelector('form').submit();
      clear();
      message.innerHTML = "";
      break;
    case 1:
      message.innerHTML = "Некорректное имя пользователя";
      break;
    case 2:
      message.innerHTML = "Некорректный email";
      break;
    case 3:
      message.innerHTML = "Пароли не сопадают";
      break;
    case 4:
      message.innerHTML = "Введите все данные";
      break;
    case 5:
      message.innerHTML = "Слишком короткий пароль";
      break;
    case 6:
      message.innerHTML = "Некорректный номер телефона";
      break;
    default:
      message.innerHTML = "Некорректные данные";
      break;
  }
  return false;
}


function validateData(login, fullName, email, tel, password, passwordConfirm){
  //регулярные выражения для проверки валидности
  regExpName = /^[A-ZА-Яa-zа-я -]+$/;
  regExpTel = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
  regExpEmail = /^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u;

  if (!regExpName.test(fullName)){
    return 1;
  }
  else if (!regExpEmail.test(email)){
    return 2;
  }
  else if (password !== passwordConfirm){
    return 3;
  }
  else if (login === "" || fullName === ""|| email ===""||password===""||passwordConfirm===""){
    return 4;
  }
  else if(password.length < 6){
    return 5;
  }
  else if (!regExpTel.test(tel)){
    return 6;
  }
  else return 0;

}

//функция очищает поля
function clear(){
  document.getElementById('login').value = "";
  document.getElementById('name').value = "";
  document.getElementById('tel').value = "";
  document.getElementById('email').value = "";
  document.getElementById('password').value = "";
  document.getElementById('password-confirm').value = "";
}