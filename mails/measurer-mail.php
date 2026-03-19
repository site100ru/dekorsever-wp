<?php
session_start();
$win = "true";

require_once('../../../../wp-load.php');

if (!empty($_POST)) {

    function getCaptcha($key) {
        $resp = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response=' . $key);
        return json_decode($resp);
    }

    $captcha = getCaptcha($_POST['g-recaptcha-response'] ?? '');

    if ($captcha->success == true && $captcha->score > 0.125) {

        $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
        $tel  = htmlspecialchars(trim($_POST['tel']  ?? ''), ENT_QUOTES, 'UTF-8');
        $adr  = htmlspecialchars(trim($_POST['adr']  ?? ''), ENT_QUOTES, 'UTF-8');
        $mes  = htmlspecialchars(trim($_POST['mes']  ?? ''), ENT_QUOTES, 'UTF-8');

        $page_note = isset($_POST['shtory-order'])
            ? '<p style="color:#888;font-style:italic">Заявка со страницы штор.</p>'
            : '';

        $subject = 'Заявка на вызов замерщика с сайта dekorsever.ru';
        $body    = '
            <html><body style="font-family:Arial,sans-serif;font-size:14px;color:#333">
            <h2 style="color:#1a1a1a">Заявка на вызов замерщика</h2>
            <p><strong>Клиент:</strong> ' . $name . '</p>
            <p><strong>Телефон:</strong> ' . $tel . '</p>
            <p><strong>Адрес:</strong> ' . $adr . '</p>
            <p><strong>Доп. информация:</strong><br>' . nl2br($mes) . '</p>
            ' . $page_note . '
            </body></html>';

        mytheme_send_mail($subject, $body);

        $_SESSION['win']       = 1;
        $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Декор-Север». Мы ответим Вам в&#160;ближайшее время.</p>';

    } else {
        $_SESSION['win']       = 1;
        $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}