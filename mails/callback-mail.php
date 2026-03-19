<?php
session_start();
$win = "true";

require_once('../../../../wp-load.php');

// Если существует переменная POST, то
if ($_POST) {

    // Отправляем данные в Google
    function getCaptcha($SecretKey) {
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
        return json_decode($Response);
    }

    /* Принимаем данные обратно */
    $Return = getCaptcha($_POST['g-recaptcha-response'] ?? '');

    // Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
    if ($Return->success == true && $Return->score > 0.125) {

        $name = htmlspecialchars(trim($_POST['name'] ?? ''));
        $tel  = htmlspecialchars(trim($_POST['tel'] ?? ''));

        /* Проверям что заполнено поле с телефоном */
        // Если поле с телефоно заполненно
        if ($tel) {
            $subject = 'Заказ обратного звонка с сайта dekorsever.ru';
            $body_html = '
                <html><body style="font-family: Arial, sans-serif; font-size: 14px;">
                <h2>Заказ обратного звонка</h2>
                <p><strong>Клиент:</strong> ' . $name . '</p>
                <p><strong>Телефон:</strong> ' . $tel . '</p>
                </body></html>';

            mytheme_send_mail($subject, $body_html);

            $_SESSION['win'] = 1;
            $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Декор-Север». Мы ответим Вам в&#160;ближайшее время.</p>';
        } else {
            // Если поле с телефоно НЕ заполненно
            $_SESSION['win'] = 1;
            $_SESSION['recaptcha'] = '<p class="text-light">Обязательное поле с номером телефона не заполнено! Пожалуйста, повторите попытку.</p>';
        }

    } else {
        // Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
        $_SESSION['win'] = 1;
        $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}