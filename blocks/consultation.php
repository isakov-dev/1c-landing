<?php
/**
 * @var object $consultation consultation data from JSON
 */
?>

<div class="consultation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="consultation__title title">
                    <?=$consultation->title?>
                </h2>
            </div>
        </div>
        <div class="consultation__form row align-items-end">
            <div class="col-lg-4">
                <div class="field">
                    <div class="consultation__label field__label">
                        <?=$consultation->fields->name->label?>
                    </div>
                    <input class="field__input" type="text" placeholder="<?=$consultation->fields->name->placeholder?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="field">
                    <div class="consultation__label field__label">
                        <?=$consultation->fields->phone->label?>
                    </div>
                    <input class="field__input" type="text" placeholder="<?=$consultation->fields->phone->placeholder?>">
                </div>
            </div>
            <div class="col-lg-4">
                <button class="submit-btn submit-btn_big">
                    <?=$consultation->button_text?>
                </button>
            </div>
            <div class="col-12">
                <div class="consultation__policy">
                    <?=$consultation->policy_text?>
                </div>
            </div>
        </div>
    </div>
</div>