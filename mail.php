<?php


$to      = $_POST['mail'];
$subject = 'Новый заказ';
$message = 'Вы заказали (название товара) (цена: ' . $_POST['price'] . ', тип: ' . $_POST['type'] . ', размер:' . $_POST['size'] . '). Наш сотрудник свяжется с вами для уточнения деталей платежа и доставки';
$headers = 'From: store@sfg.com.ua' . "\r\n" .
    'Reply-To: store@sfg.com.ua' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
