<div class="modal" id="modalApp" style="display: none">
    <a href="javascript:void(0)" class="modal__close" data-fancybox-close>
        <img src="img/modal/close.svg" alt="">
    </a>
    <div class="title">
        {{ title }}
    </div>
    <div class="modal__fields">
        <div class="modal__field field">
            <input class="field__input" type="text" placeholder="Ваше имя">
        </div>
        <div class="modal__field field">
            <input class="field__input" type="text" placeholder="Номер телефона">
        </div>
        <button class="modal__submit submit-btn submit-btn_wide">
            {{ submitText }}
        </button>
        <div class="modal__policy">
            Нажимая на кнопку, вы даете согласие на обработку персональных данных
        </div>
    </div>
    <img v-if="imageUrl" :src="imageUrl" alt="" class="modal__image">
</div>

<script>
    let modalApp;
    $(document).ready(function () {
        modalApp = new Vue({
            el: "#modalApp",
            data: {
                title: "",
                submitText: "",
                imageUrl: "",
                name: "",
                phone: "",
                sending: false,
            },
            methods: {
                openModal(title, submitText, imageUrl = false) {
                    this.title = title;
                    this.submitText = submitText;
                    this.imageUrl = imageUrl ? imageUrl : '';
                    $.fancybox.open({
                        src: '#modalApp',
                        opts: {
                            closeExisting: true,
                        },
                    });
                }
            }
        });
    });
</script>