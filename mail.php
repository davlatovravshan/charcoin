<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';

$name = $_POST['name'];
$email = $_POST['email'];
$bitcout = $_POST['bitcout'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';
$mail->isHTML(true);

$mail->setFrom('info@charcoin.io', 'CharCoin');
$mail->addAddress('team@charcoin.io');
$mail->Subject = 'Привет, Администратор!';

$body = '<h1>Пришло новое сообщение из сайта charcoin.io</h1>';

if (!empty($name)) {
	$body .= '<p><strong>Имя:</strong> ' . $name . '</p>';
}

if (!empty($name)) {
	$body .= '<p><strong>Email:</strong> ' . $email . '</p>';
}

if (!empty($name)) {
	$body .= '<p><strong>Bitcout:</strong> ' . $bitcout . '</p>';
}

if (!empty($name)) {
	$body .= '<p><strong>Сообщение:</strong> ' . $message . '</p>';
}

$filename = $_FILES['photo']['name'];
$file = $_FILES['photo']['tmp_name'];

if (!empty($file)) {

	$filePath = __DIR__ . '/uploads/' . $filename;

	if (copy($file, $filePath)) {
		$body .= '<p><strong>Файл работы: </strong>';
		$mail->addAttachment($filePath);
	}
}

$mail->Body = $body;

if ($mail->send()) {
	unlink($filePath);
	header('Location: ' . '/sended');
}
