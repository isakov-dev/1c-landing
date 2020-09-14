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
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"
              rel="stylesheet"/>
        <link rel="stylesheet" href="style.css">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                crossorigin="anonymous"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"
                integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg=="
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-the-mask/0.11.1/vue-the-mask.min.js"
                integrity="sha512-qXurwUG9teY1KFtbBifUHInCiNK/POQqJeFRSoaHg1pHEB1tBUlFKRsfPzm1D6b6ueeQOCKldvXYCtOsPURrcw=="
                crossorigin="anonymous"></script>
        <script src="common.js"></script>

        <title>1с</title>
    </head>
    <body>
        <header class="header">
            <div class="header__container container">
                <div class="header__row row align-items-center">
                    <div class="col-lg-4">
                        <img src="img/header/logo.png" alt="1С" class="header__logo">
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
                                <a href="tel:<?=$contacts->phones[0]?>"><?=$contacts->phones[0]?></a>
                            </div>
                        </div>
                        <button class="submit-btn" onclick="modalApp.openModal('<?=$contacts->modal->title?>',
                                '<?=$contacts->modal->submit_text?>', '<?=$contacts->modal->image_url?>')">
                            Заказать звонок
                        </button>
                    </div>
                </div>
            </div>
        </header>