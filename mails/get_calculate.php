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

        $name    = htmlspecialchars(trim($_POST['name']    ?? ''), ENT_QUOTES, 'UTF-8');
        $tel     = htmlspecialchars(trim($_POST['tel']     ?? ''), ENT_QUOTES, 'UTF-8');
        $product = htmlspecialchars(trim($_POST['product'] ?? ''), ENT_QUOTES, 'UTF-8');
        $mes     = htmlspecialchars(trim($_POST['mes']     ?? ''), ENT_QUOTES, 'UTF-8');

        $allowed_types = ['image/png', 'image/jpeg', 'application/pdf', 'application/octet-stream'];

        $picture   = '';
        $file_tmp  = $_FILES['mail_file']['tmp_name'] ?? '';
        $file_type = $_FILES['mail_file']['type']     ?? '';
        $file_size = $_FILES['mail_file']['size']     ?? 0;
        $file_name = $_FILES['mail_file']['name']     ?? '';

        if (!empty($file_tmp)) {
            if (in_array($file_type, $allowed_types) && $file_size < 5120000) {
                $path = __DIR__ . '/mail-img/' . basename($file_name);
                if (copy($file_tmp, $path)) {
                    $picture = $path;
                }
            } else {
                $_SESSION['win']       = 1;
                $_SESSION['recaptcha'] = '<p class="text-light">Вы пытаетесь загрузить неподходящий формат или размер файла. Файл должен быть в формате .jpg, .jpeg, .png, .pdf или .heic и размером не более 5 МБ. Пожалуйста повторите попытку.</p>';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
        }

        // Формируем тело письма
        $body_with_attach = $picture
            ? '<p><strong>В прикрепленном файле находится изображение изделия или схематично нарисованный рисунок!</strong></p>'
            : '';

        $subject = 'Заявка на расчет прочей корпусной мебели с сайта dekorsever.ru';
        $body    = '
            <html><body style="font-family:Arial,sans-serif;font-size:14px;color:#333">
            <h2 style="color:#1a1a1a">Заявка на расчет корпусной мебели</h2>
            <p><strong>Клиент:</strong> ' . $name . '</p>
            <p><strong>Телефон:</strong> ' . $tel . '</p>
            <p><strong>Продукт:</strong> ' . $product . '</p>
            <p><strong>Сообщение:</strong><br>' . nl2br($mes) . '</p>
            ' . $body_with_attach . '
            </body></html>';

        $attachments = $picture
            ? [['path' => $picture, 'name' => basename($picture)]]
            : [];

        mytheme_send_mail($subject, $body, $attachments);

        $_SESSION['win']       = 1;
        $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Декор-Север». Мы ответим Вам в&#160;ближайшее время.</p>';

    } else {
        $_SESSION['win']       = 1;
        $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}