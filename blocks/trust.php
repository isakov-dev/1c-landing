<?php
/**
 * @var object $trust trust data from JSON
 */
?>

<div class="trust">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <?=$trust->title?>
                </div>
                <div class="subtitle">
                    <?=$trust->subtitle?>
                </div>
                <div class="trust__slider">
                    <?for($i = 0; $i < 5; $i++) {?>
                        <div class="trust__partner">
                            <img src="img/trust/partner-1.png" class="trust__logo" alt="">
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
        });
    });
</script>
