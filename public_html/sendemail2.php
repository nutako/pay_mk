<?php
if((isset($_POST['fullname2'])&&$_POST['fullname2']!="")&&(isset($_POST['email2'])&&$_POST['email2']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'site@realpro.ru '; //Почта получателя, через запятую можно указать сколько угодно адресов
  		$subject = 'Перезагрузка продаж. Запрос счета'; //Загаловок сообщения
        $message = 'Перезагрузка продаж. Запрос счета
        Сайт: mk1.alex-tsar.com
		Имя: '.$_POST['fullname2'].'
        E-Mail: '.$_POST['email2'].'
		Юридическое лицо: '.$_POST['firma'].'
		ИНН: '.$_POST['inn'].'
		Телефон: '.$_POST['phone'].'
		Индекс: '.$_POST['ind'].'
		Юридический адрес: '.$_POST['uadr'];
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <".$_POST['email2'].">\r\n"; //Наименование и почта отправителя
        if (mail($to, $subject, $message, $headers) == TRUE) {
			echo "0";
		} else {
			echo "2";
		}
} else {
	echo "1";
}

?>