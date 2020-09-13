<?php
/**
 * @var object $contacts contacts data from JSON
 */
?>

<div class="contacts">
    <div class="container">
        <div class="row">
            <div class="contacts__card col-xl-4 col-lg-5">
                <div class="title">
                    <?=$contacts->footer_title?>
                </div>
                <div class="contacts__list">
                    <div class="contacts__item contact contact_align-top">
                        <img class="contact__icon" src="img/contact/pin.svg" alt="">
                        <div class="contact__content">
                            <?=$contacts->footer_address?>
                        </div>
                    </div>
                    <div class="contacts__item contact contact_align-top">
                        <img class="contact__icon" src="img/contact/phone.svg" alt="">
                        <div class="contact__content">
                            <?foreach ($contacts->phones as $phone) {?>
                                <a href="tel:<?=$phone?>"><?=$phone?></a><br>
                            <?}?>
                        </div>
                    </div>
                    <div class="contacts__item contact contact_align-top">
                        <img class="contact__icon" src="img/contact/clock.svg" alt="">
                        <div class="contact__content">
                            <?=$contacts->working_hours?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
