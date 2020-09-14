<?php
/**
 * @var object $trust trust data from JSON
 */
?>

<div class="trust">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="trust__title title">
                    <?=$trust->title?>
                </div>
                <div class="trust__subtitle subtitle">
                    <?=$trust->subtitle?>
                </div>
                <div class="trust__slider">
                    <?foreach ($trust->partners as $partner) {?>
                        <div class="trust__partner">
                            <img src="<?=$partner?>" class="trust__logo" alt="">
                        </div>
                    <?}?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(window).on('load', function () {
        $('.trust__slider').flickity({
            cellAlign: 'left',
            pageDots: false,
            contain: true,
        });
    });
</script>
