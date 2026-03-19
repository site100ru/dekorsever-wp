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

        $name  = htmlspecialchars(trim($_POST['form-name']  ?? ''), ENT_QUOTES, 'UTF-8');
        $phone = htmlspecialchars(trim($_POST['form-phone'] ?? ''), ENT_QUOTES, 'UTF-8');

        if ($phone) {

            // Способы связи
            $contact_methods = array_filter([
                $_POST['form-answer-final-1'] ?? '',
                $_POST['form-answer-final-2'] ?? '',
                $_POST['form-answer-final-3'] ?? '',
                $_POST['form-answer-final-4'] ?? '',
                $_POST['form-answer-final-5'] ?? '',
            ]);
            $contact_methods_str = !empty($contact_methods) ? implode(', ', $contact_methods) : 'Не выбрано';

            // Параметры кухни
            $answer1      = htmlspecialchars($_POST['form-question-1-kitchen'] ?? 'Не указано', ENT_QUOTES, 'UTF-8');
            $features     = array_filter([
                $_POST['form-answer-2-kitchen-1'] ?? '',
                $_POST['form-answer-2-kitchen-2'] ?? '',
                $_POST['form-answer-2-kitchen-3'] ?? '',
            ]);
            $features_str = !empty($features) ? implode(', ', $features) : 'Не выбрано';
            $kitchen_size = htmlspecialchars($_POST['form-kitchen-size']       ?? 'Не указано', ENT_QUOTES, 'UTF-8');
            $answer4      = htmlspecialchars($_POST['form-question-4-kitchen'] ?? 'Не указано', ENT_QUOTES, 'UTF-8');
            $answer5      = htmlspecialchars($_POST['form-question-5-kitchen'] ?? 'Не указано', ENT_QUOTES, 'UTF-8');
            $answer6      = htmlspecialchars($_POST['form-question-6-kitchen'] ?? 'Не указано', ENT_QUOTES, 'UTF-8');
            $answer7      = htmlspecialchars($_POST['form-question-7-kitchen'] ?? 'Не указано', ENT_QUOTES, 'UTF-8');

            $subject = 'Заявка с Квиза (Кухня) с сайта dekorsever.ru';
            $body    = '
                <html><body style="font-family:Arial,sans-serif;font-size:14px;color:#333">
                <h2 style="color:#1a1a1a">Новая заявка с Квиза (Кухня)</h2>
                <p><strong>Клиент:</strong> ' . $name . '</p>
                <p><strong>Телефон:</strong> ' . $phone . '</p>
                <p><strong>Способы связи:</strong> ' . $contact_methods_str . '</p>
                <hr>
                <h3>Параметры кухни</h3>
                <p><strong>Планировка:</strong> ' . $answer1 . '</p>
                <p><strong>Дополнительные особенности:</strong> ' . $features_str . '</p>
                <p><strong>Размеры кухни:</strong> ' . $kitchen_size . '</p>
                <p><strong>Стиль:</strong> ' . $answer4 . '</p>
                <p><strong>Материал фасада:</strong> ' . $answer5 . '</p>
                <p><strong>Бюджет:</strong> ' . $answer6 . '</p>
                <p><strong>Подарок:</strong> ' . $answer7 . '</p>
                </body></html>';

            mytheme_send_mail($subject, $body);

            $_SESSION['win']       = 1;
            $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в салон кухонь «Декор-Север». Мы ответим Вам в&#160;ближайшее время.</p>';

        } else {
            $_SESSION['win']       = 1;
            $_SESSION['recaptcha'] = '<p class="text-light">Обязательное поле с номером телефона не заполнено! Пожалуйста, повторите попытку.</p>';
        }

    } else {
        $_SESSION['win']       = 1;
        $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}