<?php
if((isset($_POST['fullname'])&&$_POST['fullname']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['phone1'])&&$_POST['phone1']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'site@realpro.ru '; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Перезагрузка продаж Запись МК'; //Загаловок сообщения
        $message = 'Перезагрузка продаж Запись МК
        Сайт: mk1.alex-tsar.com
        Имя: '.$_POST['fullname'].'
        E-Mail: '.$_POST['email'].'
        Телефон: '.$_POST['phone1'];
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <".$_POST['email'].">\r\n"; //Наименование и почта отправителя
        if (mail($to, $subject, $message, $headers) == TRUE) {
			echo "0";
		} else {
			echo "2";
		}
} else {
	echo "1";
}

?>