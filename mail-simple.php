<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';

$name = $_POST['name'];
$email = $_POST['email'];
$bitcout = $_POST['bitcout'];
$message = $_POST['message'];

$to = 'team@charcoin.io';
$subject = 'Привет, Администратор!';

$body = '<h1>Пришло новое сообщение</h1>';

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
		$body .= '<p><strong>Файлы работ: </strong><br>';
		$body .= '<img src="uploads/' . $filename . '" />';
	}
}

$headers = "From: CharCoin <info@charcoin.io>\r\n";
$headers .= "Reply-to: info@charcoin.io\r\n";
$headers .= "Content-type:text/html; charset=utf-8\r\n";

if (mail($to, $subject, $body, $headers)) {
	//unlink($filePath);
	header('Location: ' . '/sended');
}
