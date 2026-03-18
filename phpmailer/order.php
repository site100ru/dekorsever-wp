<?php
// Ошибки показываем ТОЛЬКО при разработке
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require_once('/home/v/vasilyevr/dekorsever/public_html/wp-load.php');

require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $mail = new PHPMailer(true);
    
    $mail->isSMTP();
    $mail->Host = 'smtp.yandex.ru';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = 'mebel-dsever@yandex.ru';
    $mail->Password = 'dphqlezqsxdxropg';
    
    // ВАЖНО: отключаем проверку сертификата (для надежности)
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];
    
    $mail->setFrom('mebel-dsever@yandex.ru', 'Декор-Север');
    $mail->addAddress('mebel-dsever@yandex.ru');
    $mail->addAddress('vika5383@yandex.ru');
    $mail->addAddress('vasilyev-r@mail.ru');
    $mail->Subject = 'Тест SMTP';
    
    // ФИКС КОДИРОВКИ - всегда UTF-8
    $mail->CharSet = 'UTF-8';
    
    // ТЕЛО ПИСЬМА (с HTML)
    $mail->isHTML(true);
    $mail->Body = '<html><body style="font-family: Arial, sans-serif;">Проверка</body></html>';
    $mail->AltBody = 'Проверка'; // для старых клиентов
    
    $mail->send();
    echo 'Ок, работает!';
    
} catch (Exception $e) {
    // Пользователю ничего не показываем, только логируем
    error_log('PHPMailer error: ' . $e->getMessage());
    echo 'Произошла ошибка при отправке. Пожалуйста, попробуйте позже.';
}