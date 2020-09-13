<div class="modal" id="modalApp" style="display: none">
    {{ title }}
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
                    if (imageUrl)
                        this.imageUrl = imageUrl;
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