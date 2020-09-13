<?php
/**
 * @var object $hero hero data from JSON
 */
?>

<div class="hero">
    <div class="container">
        <div class="row">
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
                <button class="hero__submit-btn submit-btn">
                    <img src="img/hero/download.svg" alt="" class="submit-btn__icon">
                    <?=$hero->button_text?>
                </button>
            </div>
        </div>
    </div>
</div>