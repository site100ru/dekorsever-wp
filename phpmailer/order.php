<?php
// Подключаем WordPress
require_once(dirname(__FILE__) . '/../../../../wp-load.php');

// ТВОИ ДАННЫЕ (впиши сюда)
$smtp_host = 'smtp.yandex.ru';      // твой сервер
$smtp_port = 465;                    // порт
$smtp_encrypt = 'ssl';                // ssl или tls
$smtp_user = 'mebel-dsever@yandex.ru';        // логин
$smtp_pass = 'DS/mebel-zakaz2023';            // пароль
$email_otpravitel = 'mebel-dsever@yandex.ru'; // с какого email отправлять
$email_komu = 'vasilyev-r@mail.ru'; // кому уходят заявки

// Данные с формы (если есть)
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

try {
    // Создаем письмо
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
    // Настройки SMTP
    $mail->isSMTP();
    $mail->Host = $smtp_host;
    $mail->Port = $smtp_port;
    $mail->SMTPSecure = $smtp_encrypt;
    $mail->SMTPAuth = true;
    $mail->Username = $smtp_user;
    $mail->Password = $smtp_pass;
    
    // От кого и кому
    $mail->setFrom($email_otpravitel, 'Мой сайт');
    $mail->addAddress($email_komu);
    
    // Тема и текст
    $mail->Subject = 'Заявка с сайта';
    $mail->Body = "Имя: $name\nТелефон: $phone\nСообщение: $message";
    
    // Отправляем
    $mail->send();
    echo 'ok';
    
} catch (Exception $e) {
    echo 'error: ' . $mail->ErrorInfo;
}