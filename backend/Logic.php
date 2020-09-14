<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';


class Logic {

    public static function SendForm($data) {

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {

            $mail->CharSet = "utf-8";
            $mail->setFrom('mail@1c-landing.tmweb.ru', '1С');
            //$mail->addAddress('isakov.n@digitalaround.ru');
            $mail->addAddress('p.nazvanov@1structure.ru');
            $mail->addAddress('info@1structure.ru');
            $mail->isHTML(true);
            $mail->Subject = 'Заявка с 1C';

            $mailBody = "Форма: {$data['title']}<br>Имя: {$data['name']}";
            if ($data['phone'])
                $mailBody .= "<br>Телефон: {$data['phone']}";
            if ($data['email'])
                $mailBody .= "<br>E-mail: {$data['email']}";
            $mail->Body = $mailBody;

            $mail->send();
            return array('success' => true);

        } catch (Exception $e) {
            return array('success' => false);
        }

    }

}