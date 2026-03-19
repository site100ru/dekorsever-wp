<?php
session_start();
$win = "true";

require_once('../../../../wp-load.php');

if (!empty($_POST)) {

    // Отправляем данные в Google
    function getCaptcha($key)
    {
        $resp = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response=' . $key);
        return json_decode($resp);
    }

    $captcha = getCaptcha($_POST['g-recaptcha-response'] ?? '');

    if ($captcha->success == true && $captcha->score > 0.125) {

        $answer1   = htmlspecialchars(trim($_POST['answer1']   ?? ''), ENT_QUOTES, 'UTF-8');
        $answer2   = htmlspecialchars(trim($_POST['answer2']   ?? ''), ENT_QUOTES, 'UTF-8');
        $answer3_1 = htmlspecialchars(trim($_POST['answer3-1'] ?? ''), ENT_QUOTES, 'UTF-8');
        $answer3_2 = htmlspecialchars(trim($_POST['answer3-2'] ?? ''), ENT_QUOTES, 'UTF-8');
        $answer3_3 = htmlspecialchars(trim($_POST['answer3-3'] ?? ''), ENT_QUOTES, 'UTF-8');
        $answer3_4 = htmlspecialchars(trim($_POST['answer3-4'] ?? ''), ENT_QUOTES, 'UTF-8');
        $answer4   = htmlspecialchars(trim($_POST['answer4']   ?? ''), ENT_QUOTES, 'UTF-8');
        $answer5   = htmlspecialchars(trim($_POST['answer5']   ?? ''), ENT_QUOTES, 'UTF-8');
        $answer6   = htmlspecialchars(trim($_POST['answer6']   ?? ''), ENT_QUOTES, 'UTF-8');
        $name      = htmlspecialchars(trim($_POST['name']      ?? ''), ENT_QUOTES, 'UTF-8');
        $phone     = htmlspecialchars(trim($_POST['phone']     ?? ''), ENT_QUOTES, 'UTF-8');

        if ($phone) {

            $subject = 'Заявка на расчет мебели с сайта dekorsever.ru';
            $body    = '
                <html><body style="font-family:Arial,sans-serif;font-size:14px;color:#333">
                <h2 style="color:#1a1a1a">Заявка на расчет кухни (квиз)</h2>
                <p><strong>Тип мебели:</strong> ' . $answer1 . '</p>
                <p><strong>Планировка:</strong> ' . $answer2 . '</p>
                <p><strong>Размер 1:</strong> ' . $answer3_1 . '</p>
                <p><strong>Размер 2:</strong> ' . $answer3_2 . '</p>
                <p><strong>Размер 3:</strong> ' . $answer3_3 . '</p>
                <p><strong>Размер островка:</strong> ' . $answer3_4 . '</p>
                <p><strong>Стиль:</strong> ' . $answer4 . '</p>
                <p><strong>Материал фасада:</strong> ' . $answer5 . '</p>
                <p><strong>Желаемый подарок:</strong> ' . $answer6 . '</p>
                <p><strong>Клиент:</strong> ' . $name . '</p>
                <p><strong>Телефон:</strong> ' . $phone . '</p>
                </body></html>';

            mytheme_send_mail($subject, $body);

            $_SESSION['win']       = 1;
            $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Декор-Север». Мы ответим Вам в&#160;ближайшее время.</p>';
        } else {
            $_SESSION['win']       = 1;
            $_SESSION['recaptcha'] = '<p class="text-light">Обязательное поле с номером телефона не заполнено! Пожалуйста, повторите попытку и заполните поле с номером телефона.</p>';
        }
    } else {
        $_SESSION['win']       = 1;
        $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
