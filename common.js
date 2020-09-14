let formSender;

$(document).ready(function () {

    formSender = new Vue({
        methods: {
            async send(formData) {
                return new Promise((resolve, reject) => {

                    axios
                        .post('/backend/rest/?action=send_form', JSON.stringify(formData))
                        .then(function (response) {
                            $.fancybox.open({
                                src: '#success-modal',
                                opts: {
                                    closeExisting: true,
                                },
                            });
                            resolve("ok");
                        })
                        .catch(function (error) {
                            $.fancybox.open({
                                src: '#error-modal',
                                opts: {
                                    closeExisting: true,
                                },
                            });
                            reject("error");
                        });

                });
            }
        }
    });

});