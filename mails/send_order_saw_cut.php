<?php
session_start();

require_once('../../../../wp-load.php');

if (!empty($_POST)) {

    function getCaptcha($key) {
        $resp = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response=' . $key);
        return json_decode($resp);
    }

    $captcha = getCaptcha($_POST['g-recaptcha-response'] ?? '');

    if ($captcha->success == true && $captcha->score > 0.125) {

        $allowed_types = [
            'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ];

        $file_tmp  = $_FILES['mail_file']['tmp_name'] ?? '';
        $file_type = $_FILES['mail_file']['type']     ?? '';
        $file_size = $_FILES['mail_file']['size']     ?? 0;
        $file_name = $_FILES['mail_file']['name']     ?? '';

        $attachments = [];

        if (!empty($file_tmp)) {
            if (in_array($file_type, $allowed_types) && $file_size < 5120000) {
                $path = __DIR__ . '/mail-img/' . basename($file_name);
                if (copy($file_tmp, $path)) {
                    $attachments[] = ['path' => $path, 'name' => basename($file_name)];
                }
            } else {
                $_SESSION['win']       = 1;
                $_SESSION['recaptcha'] = '<p class="text-light">Вы пытаетесь загрузить неподходящий формат или размер файла. Файл должен быть в формате .xls или .xlsx и размером не более 5 МБ. Пожалуйста повторите попытку.</p>';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
        }

        $attach_note = !empty($attachments)
            ? '<p><strong>Файл с заявкой во вложении.</strong></p>'
            : '<p>Файл не был прикреплён.</p>';

        $subject = 'Заявка на распил с сайта dekorsever.ru';
        $body    = '
            <html><body style="font-family:Arial,sans-serif;font-size:14px;color:#333">
            <h2 style="color:#1a1a1a">Заявка на распил</h2>
            ' . $attach_note . '
            </body></html>';

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