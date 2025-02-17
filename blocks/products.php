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
                        <a class="tabs__item col-lg-3 col-md-5 col-sm-7 col-9 nav-link <?if (!$index) {?>active<?}?>"
                           data-toggle="tab"
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
                                                            <?foreach ($product->advantages as $item) {
                                                                $monthIndex = intval(date('n')) - 1;
                                                                $item = str_replace("#in-month#",
                                                                    $products->in_months[$monthIndex], $item);
                                                                ?>
                                                                <li class="list__item">
                                                                    <?=$item?>
                                                                </li>
                                                            <?}?>
                                                        </ul>
                                                    <?}?>
                                                    <div class="card__hidden">
                                                        <ul class="card__bonuses">
                                                            <?foreach ($product->bonuses as $item) {
                                                                $monthIndex = intval(date('n')) - 1;
                                                                $item = str_replace("#in-month#",
                                                                    $products->in_months[$monthIndex], $item);?>
                                                                <li class="card__bonus">
                                                                    <?=$item?>
                                                                </li>
                                                            <?}?>
                                                            <img src="img/products/bonus-angle.svg" alt=""
                                                                 class="card__bonus-angle">
                                                        </ul>
                                                        <div class="card__total">
                                                            <div class="card__buttons">
                                                                <div class="card__price d-sm-none">
                                                                    <?=$product->prices->buy?>
                                                                </div>
                                                                <button class="card__button submit-btn"
                                                                        onclick="modalApp.openModal(
                                                                            'Заказать программу «<?=$product->name?>»',
                                                                            'Заказать', 'img/products/modal.png')">
                                                                    Заказать
                                                                </button>
                                                                <?if ($product->prices->rent) {?>
                                                                    <div class="card__price d-sm-none">
                                                                        <?=$product->prices->rent?>
                                                                    </div>
                                                                    <button class="card__button submit-btn submit-btn_inverse"
                                                                            onclick="modalApp.openModal(
                                                                                'Арендовать программу «<?=$product->name?>»',
                                                                                'Арендовать', 'img/products/modal.png')">
                                                                        Арендовать
                                                                    </button>
                                                                <?}?>
                                                            </div>
                                                            <div class="card__prices d-none d-sm-block">
                                                                <div class="card__price">
                                                                    <?=$product->prices->buy?>
                                                                </div>
                                                                <?if ($product->prices->rent) {?>
                                                                    <div class="card__price">
                                                                        <?=$product->prices->rent?>
                                                                    </div>
                                                                <?}?>
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