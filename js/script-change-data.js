let form = document.querySelector('form');
form.style.display  = 'none';

//вывод сообщения об ошибке
let message = document.querySelector('.alert');

//убирает и показывает форму по нажатию кнопки
document.querySelector('.change').onclick =  function() {
  changeDisplay();
  message.innerHTML = "";
}

function changeDisplay(){
  if (form.style.display === 'none')
    form.style.display = 'block';
  else form.style.display = 'none'; 
}


//проверяем валидность при нажатии кнопки "Сохранить"
document.querySelector('form').onsubmit = function () {
  //переменные хранят введенные данные
  let fullName = document.getElementById('name').value;
  let email = document.getElementById('email').value;
  let tel = document.getElementById('tel').value;
  

  if (!validateData(fullName, email, tel)){
    message.innerHTML = "Некорректные данные";
  }
  else {
    document.querySelector('form').submit();
    //setData(fullName, email, tel);
    changeDisplay();
    clear();
  }
  //отмена перезагрузки страницы
  return false;

;}
document.querySelector('.cancel').onclick = function () { 
  clear(); 
  changeDisplay();
  return false; 
}


function validateData(fullName, email, tel){
  //регулярные выражения для проверки валидности
  regExpName = /^[A-ZА-Яa-zа-я -]+$/;
  regExpEmail = /^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u;
  regExpTel = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;

  if (!regExpName.test(fullName) || !regExpEmail.test(email) || !regExpTel.test(tel))
  {
    return false;
  }
  else return true;
}

function setData(fullName, email, tel){
  document.querySelector('.name span').innerHTML = fullName;
  document.querySelector('.tel span').innerHTML = tel;
  document.querySelector('.email span').innerHTML = email; 
}

function clear(){
  document.getElementById('name').value = "";
  document.getElementById('email').value = "";
  document.getElementById('tel').value = "";
}



