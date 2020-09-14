<div class="modal" id="modal-app" style="display: none">
    <a href="javascript:void(0)" class="modal__close" data-fancybox-close>
        <img src="img/modal/close.svg" alt="" class="d-none d-lg-block">
        <img src="img/modal/close-mobile.svg" alt="" class="d-lg-none">
    </a>
    <div class="title">
        {{ title }}
    </div>
    <div class="modal__fields">
        <div class="modal__field field">
            <input class="field__input" type="text" placeholder="Ваше имя" v-model="name">
        </div>
        <div class="modal__field field" v-if="!emailInsteadPhone">
            <the-mask v-model="phone" mask="+7 (###) ###-##-##" :masked="true" class="field__input"
                      placeholder="Номер телефона"></the-mask>
        </div>
        <div class="modal__field field" v-else>
            <input class="field__input" type="email" placeholder="Ваш e-mail" v-model="email">
        </div>
        <button class="modal__submit submit-btn submit-btn_wide" v-on:click="submitForm()" :disabled="!formIsValid">
            <span v-if="!sending">{{ submitText }}</span>
            <span v-else>Отправка...</span>
        </button>
        <div class="modal__policy">
            Нажимая на кнопку, вы даете согласие на обработку персональных данных
        </div>
    </div>
    <img v-if="imageUrl" :src="imageUrl" alt="" class="modal__image">
</div>

<div class="modal modal_small" id="success-modal" style="display: none">
    <a href="javascript:void(0)" class="modal__close" data-fancybox-close>
        <img src="img/modal/close.svg" alt="" class="d-none d-lg-block">
        <img src="img/modal/close-mobile.svg" alt="" class="d-lg-none">
    </a>
    <div class="title">
        Ваша заявка принята!
    </div>
    <div class="modal__text">
        Благодарим за внимание к нашей компании.<br>
        Наш менеджер свяжется с вами в течение 15 минут.
    </div>
</div>

<div class="modal modal_small" id="error-modal" style="display: none">
    <a href="javascript:void(0)" class="modal__close" data-fancybox-close>
        <img src="img/modal/close.svg" alt="" class="d-none d-lg-block">
        <img src="img/modal/close-mobile.svg" alt="" class="d-lg-none">
    </a>
    <div class="title">
        Ошибка!
    </div>
    <div class="modal__text">
        Ваше сообщение не было отправлено<br>
        Повторите попытку позже.
    </div>
</div>

<script>
    let modalApp;
    $(document).ready(function () {
        modalApp = new Vue({
            el: "#modal-app",
            data: {
                title: "",
                submitText: "",
                imageUrl: "",
                name: "",
                phone: "",
                email: "",
                sending: false,
                emailInsteadPhone: false,
            },
            methods: {
                openModal(title, submitText, imageUrl = false, emailInsteadPhone = false) {
                    this.title = title;
                    this.submitText = submitText;
                    this.imageUrl = imageUrl ? imageUrl : '';
                    this.emailInsteadPhone = emailInsteadPhone;
                    this.name = '';
                    this.phone = '';
                    this.email = '';
                    $.fancybox.open({
                        src: '#modal-app',
                        opts: {
                            closeExisting: true,
                        },
                    });
                },
                submitForm() {
                    if (this.formIsValid && !this.sending) {

                        this.sending = true;
                        let self = this;

                        let formData = {
                            title: this.title,
                            name: this.name,
                        };

                        if (!this.emailInsteadPhone)
                            formData['phone'] = this.phone;
                        else
                            formData['email'] = this.email;

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
                    if (!this.emailInsteadPhone)
                        return (this.name.length > 1 && this.phone.length === 18);
                    else {
                        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return (this.name.length > 1 && re.test(String(this.email).toLowerCase()));
                    }
                },
            }
        });
    });
</script>