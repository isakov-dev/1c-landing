<?php
/**
 * @var object $products products data from JSON
 */
?>

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title">
                    <?=$products->title?>
                </h2>
            </div>
        </div>
        <div class="products__tabs row">
            <div class="col-12">
                <div class="tabs nav row" role="tablist">
                    <?foreach ($products->tabs as $index => $tab) {?>
                        <a class="tabs__item col-lg-3 nav-link <?if (!$index) {?>active<?}?>" data-toggle="tab"
                           href="#products-tab-<?=$index?>" role="tab">
                            <img src="<?=$tab->image?>" alt="<?=$tab->name?>" class="tabs__image">
                            <span class="tabs__title">
                                <?=$tab->name?>
                            </span>
                            <span class="tabs__description">
                                <?=$tab->description?>
                            </span>
                        </a>
                    <?}?>
                </div>
                <div class="products__tabs-content tab-content">
                    <?foreach ($products->tabs as $index => $tab) {?>
                        <div class="tab-pane fade <?if (!$index) {?>show active<?}?>" id="products-tab-<?=$index?>"
                             role="tabpanel">
                            <?if (!empty($tab->products)) {?>
                                <div class="products__list">
                                    <?foreach ($tab->products as $product) {?>
                                        <div class="card-container">
                                            <div class="card">
                                                <div class="card__header">
                                                    <?if ($product->image) {?>
                                                        <img src="<?=$product->image?>" alt="<?=$product->name?>"
                                                             class="card__image">
                                                    <?}?>
                                                    <div class="card__title">
                                                        <?=$product->name?>
                                                    </div>
                                                </div>
                                                <div class="card__content">
                                                    <?if (!empty($product->advantages)) {?>
                                                        <ul class="list">
                                                            <?foreach ($product->advantages as $item) {?>
                                                                <li class="list__item">
                                                                    <?=$item?>
                                                                </li>
                                                            <?}?>
                                                        </ul>
                                                    <?}?>
                                                    <div class="card__hidden">
                                                        <ul class="card__bonuses">
                                                            <?foreach ($product->bonuses as $item) {?>
                                                                <li class="card__bonus">
                                                                    <?=$item?>
                                                                </li>
                                                            <?}?>
                                                        </ul>
                                                        <div class="card__total">
                                                            <div class="card__buttons">
                                                                <button class="card__button submit-btn">
                                                                    Заказать
                                                                </button>
                                                                <button class="card__button submit-btn
                                                                    submit-btn_inverse">
                                                                    Арендовать
                                                                </button>
                                                            </div>
                                                            <div class="card__prices">
                                                                <div class="card__price">
                                                                    <?=$product->prices->buy?>
                                                                </div>
                                                                <div class="card__price">
                                                                    <?=$product->prices->rent?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?}?>
                                </div>
                            <?}?>
                        </div>
                    <?}?>
                </div>
            </div>
        </div>
    </div>
</div>