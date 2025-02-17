<?php
/**
 * @var object $reviews reviews data from JSON
 */
?>

<div class="reviews">
    <div class="reviews__content container">
        <div class="row">
            <div class="col-12">
                <div class="reviews__title title">
                    <?=$reviews->title?>
                </div>
                <div class="reviews__slider">
                    <?foreach ($reviews->reviews as $review) {?>
                        <div class="reviews__item">
                            <a data-fancybox="reviews" href="<?=$review->full?>">
                                <img src="<?=$review->preview?>" alt="" class="reviews__scan">
                            </a>
                        </div>
                    <?}?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(window).on('load', function () {
        $('.reviews__slider').flickity({
            cellAlign: 'left',
            pageDots: false,
            contain: true,
        });
    });
</script>
