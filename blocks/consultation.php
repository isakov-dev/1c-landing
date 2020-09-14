<?php
/**
 * @var object $consultation consultation data from JSON
 */
?>

<div class="consultation">
    <div class="consultation__content container">
        <div class="row">
            <div class="col-12">
                <h2 class="consultation__title title">
                    <?=$consultation->title?>
                </h2>
            </div>
        </div>
        <div class="consultation__form row align-items-end" id="consultation_form">
            <div class="col-lg-4 col-md-6">
                <div class="consultation__field field">
                    <div class="consultation__label field__label">
                        <?=$consultation->fields->name->label?>
                    </div>
                    <input class="field__input" type="text" v-model="name"
                           placeholder="<?=$consultation->fields->name->placeholder?>">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="consultation__field field">
                    <div class="consultation__label field__label">
                        <?=$consultation->fields->phone->label?>
                    </div>
                    <the-mask v-model="phone" mask="8 (###) ###-##-##" :masked="true" class="field__input"
                              placeholder="<?=$consultation->fields->phone->placeholder?>"></the-mask>
                </div>
            </div>
            <div class="col-lg-4">
                <button class="consultation__submit submit-btn submit-btn_big" v-on:click="submitForm()"
                        :disabled="!formIsValid">
                    <span v-if="!sending"><?=$consultation->button_text?></span>
                    <span v-else>Отправка...</span>
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

<script>
    let consultationForm;
    $(document).ready(function () {
        consultationForm = new Vue({
            el: "#consultation_form",
            data: {
                title: "<?=$consultation->title?>",
                name: "",
                phone: "",
            },
            methods: {
                submitForm() {
                    if (this.formIsValid && !this.sending) {

                        this.sending = true;
                        let self = this;

                        let formData = {
                            name: this.name,
                            phone: this.phone
                        };

                        formSender.send(formData)
                            .then(function() {
                                //
                            })
                            .catch(function () {

                            })
                            .finally(function () {
                                self.name = "";
                                self.phone = "";
                                self.sending = false;
                            });
                    }
                },
            },
            computed: {
                formIsValid() {
                    return (this.name.length > 1 && this.phone.length === 17);
                },
            }
        });
    });
</script>