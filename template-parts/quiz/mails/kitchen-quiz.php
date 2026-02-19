<?php
session_start();
$win = "true";

// Общие данные
$name = isset($_POST['form-name']) ? $_POST['form-name'] : '';
$phone = isset($_POST['form-phone']) ? $_POST['form-phone'] : '';

// Способы связи (чекбоксы)
$answer_final_1 = isset($_POST['form-answer-final-1']) ? $_POST['form-answer-final-1'] : '';
$answer_final_2 = isset($_POST['form-answer-final-2']) ? $_POST['form-answer-final-2'] : '';
$answer_final_3 = isset($_POST['form-answer-final-3']) ? $_POST['form-answer-final-3'] : '';
$answer_final_4 = isset($_POST['form-answer-final-4']) ? $_POST['form-answer-final-4'] : '';
$answer_final_5 = isset($_POST['form-answer-final-5']) ? $_POST['form-answer-final-5'] : '';

// Собираем способы связи в одну строку
$contact_methods = array();
if ($answer_final_1) $contact_methods[] = $answer_final_1;
if ($answer_final_2) $contact_methods[] = $answer_final_2;
if ($answer_final_3) $contact_methods[] = $answer_final_3;
if ($answer_final_4) $contact_methods[] = $answer_final_4;
if ($answer_final_5) $contact_methods[] = $answer_final_5;
$contact_methods_str = !empty($contact_methods) ? implode(', ', $contact_methods) : 'Не выбрано';

// Данные кухни
$answer1_kitchen = isset($_POST['form-question-1-kitchen']) ? $_POST['form-question-1-kitchen'] : 'Не указано';

// Дополнительные особенности (множественный выбор)
$features = array();
if (isset($_POST['form-answer-2-kitchen-1']) && $_POST['form-answer-2-kitchen-1'])
    $features[] = $_POST['form-answer-2-kitchen-1'];
if (isset($_POST['form-answer-2-kitchen-2']) && $_POST['form-answer-2-kitchen-2'])
    $features[] = $_POST['form-answer-2-kitchen-2'];
if (isset($_POST['form-answer-2-kitchen-3']) && $_POST['form-answer-2-kitchen-3'])
    $features[] = $_POST['form-answer-2-kitchen-3'];
$features_str = !empty($features) ? implode(', ', $features) : 'Не выбрано';

// Размер кухни
$kitchen_size = isset($_POST['form-kitchen-size']) ? $_POST['form-kitchen-size'] : 'Не указано';

$answer4_kitchen = isset($_POST['form-question-4-kitchen']) ? $_POST['form-question-4-kitchen'] : 'Не указано';
$answer5_kitchen = isset($_POST['form-question-5-kitchen']) ? $_POST['form-question-5-kitchen'] : 'Не указано';
$answer6_kitchen = isset($_POST['form-question-6-kitchen']) ? $_POST['form-question-6-kitchen'] : 'Не указано';
$answer7_kitchen = isset($_POST['form-question-7-kitchen']) ? $_POST['form-question-7-kitchen'] : 'Не указано';

// Заголовки письма
$headers = "MIME-Version: 1.0\r\n";
$headers .= "From: info@dekorsever.ru\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

// Формируем тело письма
$email_body = "
    <h3>Новая заявка с Квиза (Кухня) с сайта dekorsever.ru</h3>
    <p><strong>Имя:</strong> " . htmlspecialchars($name) . "</p>
    <p><strong>Телефон:</strong> " . htmlspecialchars($phone) . "</p>
    <p><strong>Способы связи:</strong> " . htmlspecialchars($contact_methods_str) . "</p>
    <hr>
    <h4>Параметры кухни:</h4>
    <p><strong>Планировка:</strong> " . htmlspecialchars($answer1_kitchen) . "</p>
    <p><strong>Дополнительные особенности:</strong> " . htmlspecialchars($features_str) . "</p>
    <p><strong>Размеры кухни:</strong> " . htmlspecialchars($kitchen_size) . "</p>
    <p><strong>Стиль:</strong> " . htmlspecialchars($answer4_kitchen) . "</p>
    <p><strong>Материал фасада:</strong> " . htmlspecialchars($answer5_kitchen) . "</p>
    <p><strong>Бюджет:</strong> " . htmlspecialchars($answer6_kitchen) . "</p>
    <p><strong>Подарок:</strong> " . htmlspecialchars($answer7_kitchen) . "</p>
";

// Проверяем что заполнено поле с телефоном
if ($_POST && $phone) {

    // "mebel-dsever@yandex.ru, vika5383@yandex.ru, vasilyev-r@mail.ru, vasilyev-r@yandex.ru",
    // "sidorov-vv3@mail.ru, vasilyev-r@mail.ru",
    
    mail(
        "sidorov-vv3@mail.ru, vasilyev-r@mail.ru",
        "Заявка с Квиза (Кухня) с сайта dekorsever.ru",
        $email_body,
        $headers
    );

    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в салон кухонь «Декор-Север». Мы ответим Вам в&#160;ближайшее время.</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>