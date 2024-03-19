<?php

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$customer_name = $_POST['customer_name'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$mail_address =   $_POST['mail'];
$payment_method = $_POST['pay'];

try {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "LoftProBy@gmail.com";
    $mail->Password = "eva30082002@";
    $mail->setFrom("LoftProBy@gmail.com", "LoftPro");
    $mail->addAddress($mail_address);
    $mail->isHTML(true);
    $mail->Subject = "Заказ из магазина LoftPRO";
    $mail->Body =
        '<html>
        <body>
        <center>	
        <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
        <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
        <tr>
        <td>Интернет-магазин LoftPro </td>
        </tr>
        <tr>
        <td>Заказ №' . rand() . ' Принят! Спасибо за заказ,  ' . $customer_name . '! </td>
        </tr>
        <tr>
        <td>Наш менеджер свяжется с Вами в ближайшее время для уточнения заказа!</td>
        </tr>
        </table>
        </center>	
        </body>
        </html>';

    $mail->send();
} catch (Exception $ex) {
    echo "Ошибка {$mail->ErrorInfo}";
}

$mail->smtpClose();

header("Location: {$_SERVER['HTTP_REFERER']}");
