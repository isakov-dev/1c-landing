<?php
/**
 * @var object $support support data from JSON
 */
?>

<div class="support">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="title">
                    <?=$support->title?>
                </div>
                <div class="subtitle">
                    <?=$support->subtitle?>
                </div>
                <ul class="support__list list">
                    <?foreach ($support->list as $item) {?>
                        <li class="list__item">
                            <?=$item?>
                        </li>
                    <?}?>
                </ul>
            </div>
        </div>
    </div>
</div>
