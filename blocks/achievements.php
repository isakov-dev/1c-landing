<?php
/**
 * @var object $achievements achievements data from JSON
 */
?>

<div class="achievements">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <?=$achievements->title?>
                </div>
            </div>
        </div>
        <?if (!empty($achievements->advantages)) {?>
            <div class="achievements__advantages row">
                <?foreach ($achievements->advantages as $advantage) {?>
                    <div class="advantage col-lg-6">
                        <img class="advantage__icon" src="<?=$advantage->icon?>" alt="">
                        <div class="advantage__text">
                            <?=$advantage->text?>
                        </div>
                    </div>
                <?}?>
            </div>
        <?}?>
        <?if (!empty($achievements->achievements)) {?>
            <div class="achievements__items row justify-content-center">
                <?foreach ($achievements->achievements as $achievement) {?>
                    <div class="achievement col-lg-4 col-md-6">
                        <div class="achievement__number">
                            <?=$achievement->number?>
                        </div>
                        <div class="achievement__caption">
                            <?=$achievement->caption?>
                        </div>
                    </div>
                <?}?>
            </div>
        <?}?>
    </div>
</div>