<?php
session_start();
$name = $_POST['namer'];
$phone = $_POST['phone'];
$otkuda = $_POST['otkuda'];
$kuda = $_POST['kuda'];
$radio = $_POST['radio'];
$machine = $_POST['machine'];
$rule = $_POST['rule'];
$voditelu = $_POST['voditelu'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$otkuda = htmlspecialchars($otkuda);
$kuda = htmlspecialchars($kuda);
$radio = htmlspecialchars($radio);
$machine = htmlspecialchars($machine);
$rule = htmlspecialchars($rule);
$voditelu = htmlspecialchars($voditelu);

$name = urldecode($name);
$phone = urldecode($phone);
$otkuda = urldecode($otkuda);
$kuda = urldecode($kuda);
$radio = urldecode($radio);
$machine = urldecode($machine);
$rule = urldecode($rule);
$voditelu = urldecode($voditelu);

$name = trim($name);
$phone = trim($phone);
$otkuda = trim($otkuda);
$kuda = trim($kuda);
$radio = trim($radio);
$machine = trim($machine);
$rule = trim($rule);
$voditelu = trim($voditelu);


if (mail(
   "igazarov@mail.ru",
   "Новое письмо с сайта",
   "Имя: " . $name . "\n" .
      "Телефон: " . $phone . "\n" .
      "Откуда: " . $otkuda . "\n" .
      "Куда: " . $kuda . "\n" .
      "Заблокировано колес: " . $radio . "\n" .
      "Что перевозить: " . $machine . "\n" .
      "Руль заблокирован?: " . $rule . "\n" .
      "Сообщение водителю: " . $voditelu . "\n",
   "From: igazarov@mail.ru \r\n" .
      "Content-type: text/html; charset=utf-8 \r\n"
)) {
   $_SESSION['message'] = "Ваши данные успешно отправлены, <br> мы свяжемся с вами в ближайшее время";
   header("Location: index.php");
} else {
   $_SESSION['message'] = "Ошибка";
};
