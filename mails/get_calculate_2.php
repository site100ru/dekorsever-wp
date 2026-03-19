<?php
session_start();
$win = "true";

require_once('../../../../wp-load.php');
// Если существует переменная POST, то
if (!empty($_POST)) {

    // Отправляем данные в Google
    function getCaptcha($key) {
        $resp = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response=' . $key);
        return json_decode($resp);
    }

    $captcha = getCaptcha($_POST['g-recaptcha-response'] ?? '');

    if ($captcha->success == true && $captcha->score > 0.125) {

        $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
        $tel  = htmlspecialchars(trim($_POST['tel']  ?? ''), ENT_QUOTES, 'UTF-8');
        $mes  = htmlspecialchars(trim($_POST['mes']  ?? ''), ENT_QUOTES, 'UTF-8');

        $allowed_types = ['image/png', 'image/jpeg', 'application/pdf', 'application/octet-stream'];

        // Проверяем все загруженные файлы перед отправкой
        $attachments = [];
        if (!empty($_FILES['file']['name'][0])) {
            foreach ($_FILES['file']['name'] as $key => $filename) {
                $file_tmp  = $_FILES['file']['tmp_name'][$key];
                $file_type = $_FILES['file']['type'][$key];
                $file_size = $_FILES['file']['size'][$key];

                if (in_array($file_type, $allowed_types) && $file_size < 5120000) {
                    $path = __DIR__ . '/mail-img/' . basename($filename);
                    if (copy($file_tmp, $path)) {
                        $attachments[] = ['path' => $path, 'name' => basename($filename)];
                    }
                } else {
                    $_SESSION['win']       = 1;
                    $_SESSION['recaptcha'] = '<p class="text-light">Вы пытаетесь загрузить неподходящий формат или размер одного или нескольких файлов. Файлы должны быть в формате .jpg, .jpeg, .png, .pdf или .heic и размером не более 5 МБ каждый. Пожалуйста повторите попытку.</p>';
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
            }
        }

        $attach_note = !empty($attachments)
            ? '<p><strong>В прикрепленных файлах находятся изображения изделия или схематично нарисованный рисунок!</strong></p>'
            : '';

        $subject = 'Заявка на расчет стоимости с сайта dekorsever.ru';
        $body    = '
            <html><body style="font-family:Arial,sans-serif;font-size:14px;color:#333">
            <h2 style="color:#1a1a1a">Заявка на расчет стоимости</h2>
            <p><strong>Клиент:</strong> ' . $name . '</p>
            <p><strong>Телефон:</strong> ' . $tel . '</p>
            <p><strong>Сообщение:</strong><br>' . nl2br($mes) . '</p>
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