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
                            <span class="tabs__title">
                                <?=$tab->name?>
                            </span>
                            <span class="tabs__description">
                                <?=$tab->description?>
                            </span>
                        </a>
                    <?}?>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel">1</div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel">2</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel">3</div>
                </div>
            </div>
        </div>
    </div>
</div>