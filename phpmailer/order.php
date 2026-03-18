<?php
// 1. Указываем, что будем использовать классы из пространства имен PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// 2. Подключаем три скачанных файла в правильном порядке
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// 3. Создаем объект. Параметр 'true' включает исключения для ловли ошибок
$mail = new PHPMailer(true);

try {
    // ---- Настройки SMTP (заполните своими данными) ----
    $mail->isSMTP();                          // Отправка через SMTP
    $mail->Host       = 'smtp.yandex.ru';   // Сервер (пример: smtp.gmail.com)
    $mail->SMTPAuth   = true;                 // Включаем аутентификацию
    $mail->Username   = 'mebel-dsever@yandex.ru'; // Ваш email для входа
    $mail->Password   = 'DS/mebel-zakaz2023';      // Ваш пароль
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Шифрование: 'tls' или 'ssl'
    $mail->Port       = 465;                   // Порт: 587 для TLS, 465 для SSL

    // ---- От кого и кому ----
    $mail->setFrom('mebel-dsever@yandex.ru', 'Декор-Север');
    $mail->addAddress('vasilyev-r@mail.ru', 'Роман Васильев'); // Кому

    // ---- Тема и тело письма ----
    $mail->isHTML(true);                       // Формат HTML
    $mail->Subject = 'Минимальное тестовое письмо';
    $mail->Body    = 'Это <b>простое</b> HTML-письмо.';
    $mail->AltBody = 'Это текстовая версия письма для старых клиентов.';

    // 4. Отправляем
    $mail->send();
    echo 'Письмо успешно отправлено!';
} catch (Exception $e) {
    // Если произошла ошибка
    echo "Не удалось отправить письмо. Ошибка: {$mail->ErrorInfo}";
}