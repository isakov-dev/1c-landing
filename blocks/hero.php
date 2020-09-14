<?php
/**
 * @var object $hero hero data from JSON
 */
?>

<div class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 d-lg-none">
                <img src="img/hero/bg-mobile.png" class="hero__mobile-image" alt="">
            </div>
            <div class="col-lg-6">
                <h1 class="hero__title title">
                    <?=$hero->title?>
                </h1>
                <div class="hero__subtitle subtitle">
                    <?=$hero->subtitle?>
                </div>
                <ul class="hero__list list">
                    <?foreach ($hero->list as $item) {?>
                        <li class="list__item">
                            <?=$item?>
                        </li>
                    <?}?>
                </ul>
                <button class="hero__submit-btn submit-btn" onclick="modalApp.openModal('<?=$hero->modal->title?>',
                        '<?=$hero->modal->submit_text?>', '<?=$hero->modal->image_url?>', true)">
                    <img src="img/hero/download.svg" alt="" class="submit-btn__icon">
                    <span><?=$hero->button_text?></span>
                </button>
            </div>
        </div>
    </div>
</div>