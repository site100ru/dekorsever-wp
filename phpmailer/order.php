<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ПРОСТО ВСТАВЬ СВОЙ ПУТЬ (он у тебя в ошибке написан)
require_once('/home/v/vasilyevr/dekorsever/public_html/wp-load.php');

// Подключаем PHPMailer из ядра WordPress
require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
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
    
    $mail->setFrom('mebel-dsever@yandex.ru', 'Декор-Север');
    $mail->addAddress('vasilyev-r@mail.ru');
    $mail->Subject = 'Тест SMTP';
    $mail->Body = 'Проверка';
    
    $mail->send();
    echo 'Ок, работает!';
    
} catch (Exception $e) {
    echo 'Ошибка: ' . $e->getMessage();
}