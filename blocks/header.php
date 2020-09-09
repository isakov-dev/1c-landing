<?php
/**
* @var object $contacts contacts data from JSON
*/
?>
<!doctype html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
              rel="stylesheet">
        <link rel="stylesheet" href="style.css">

        <title>1с</title>
    </head>
    <body>
        <header class="header">
            <div class="header__container container">
                <div class="header__row row align-items-center">
                    <div class="col-lg-4">
                        <img src="img/header/logo.png" alt="1С">
                    </div>
                    <div class="header__contacts col-lg-8">
                        <div class="contact">
                            <img class="contact__icon" src="img/contact/pin.svg" alt="">
                            <div class="contact__content">
                                <div class="contact__caption"><?=$contacts->header_city?></div>
                                <?=$contacts->header_address?>
                            </div>
                        </div>
                        <div class="contact">
                            <img class="contact__icon" src="img/contact/phone.svg" alt="">
                            <div class="contact__content">
                                <?=$contacts->phones[0]?>
                            </div>
                        </div>
                        <button class="submit-btn">
                            Записаться
                        </button>
                    </div>
                </div>
            </div>
        </header>