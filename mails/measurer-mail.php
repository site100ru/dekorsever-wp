<?php
	session_start();
	$win = "true";
	// Если существует переменная POST, то
	
	if($_POST){
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			
			$Return = json_decode($Response);
			return $Return;
		}
		
		/* Принимаем данные обратно */
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > .125 ){
			
			
			$name = $_POST['name'];
			$tel = $_POST['tel'];
			$adr = $_POST['adr'];
			$mes = $_POST['mes'];
			$subject = '=?utf-8?B?' . base64_encode("Заявка на вызов замерщика с сайта dekorsever.ru") . '?='; // Тема письма
			
			if ( isset( $_POST['shtory-order'] ) ) {
				mail( "mebel-dsever@yandex.ru, vika5383@yandex.ru, vasilyev-r@mail.ru, vasilyev-r@yandex.ru", $subject, "
					Клиент ".$name."\n
					Телефон: ".$tel."\n
					Адрес: ".$adr."\n
					Доп. инф: ".$mes."\n
					Заявка со страницы штор."
				);
			} else {
				mail( "mebel-dsever@yandex.ru,  vasilyev-r@mail.ru", $subject, "
					Клиент ".$name."\n
					Телефон: ".$tel."\n
					Адрес: ".$adr."\n
					Доп. инф: ".$mes."\n
				" );
			}
			
			//mail( "infoskmeridian@mail.ru", "Заявка с сайта meridian-vorot.ru", "Услуга: ".$service."\n\nКлиент ".$name."\n\nТелефон: ".$tel ); 
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Декор-Север». Мы ответим Вам в&#160;ближайшее время.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		
		} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	}
?>