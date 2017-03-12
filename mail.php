<?php 
	// Принимаем постовые данные
$whatever=$_POST['whatever'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];

//тут указываем на какой ящик посылать письмо
$to="vlada8891@gmail.com";
//далее идет тема и само сообщение
//тема письма
$subject="Заявка с сайта";
//сообшение письма
$message="
Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
E-mail: ".htmlspecialchars($email)."<br />
Сообщение: ".htmlspecialchars($user_message);
//Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a>"
//;
// отправляем письмо при помощи функции mail();
$headers="From: homework.sl <putin@homework.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
//Перенаправляем человека на страницу с благодарностью и завершаем скрипт
header('Location: thanks.html');
exit();
?>