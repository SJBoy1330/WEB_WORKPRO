$('#login').on('submit', function (e) {
    e.preventDefault();
    // console.log(e);
    var email = $('#email').val();
    var kata_sandi = $('#kata_sandi').val();
    var url = BASE_URL + 'func_auth';
    // console.log(url);

    // console.log(email, kata_sandi);
    $.ajax({
        url: url,
        method: 'POST',
        data: { email: email, kata_sandi: kata_sandi },
        dataType: 'json',
        beforeSend: function () {
            $('#btn_login').prop('disabled', true);
            $('#btn_login').html('<div class="spinner-border" style="color : #FFFFFF" role="status">\
                <span class="sr-only"></span>\
            </div>');

        },
        success: function (data) {
            $('.fadedin').remove();
            // console.log(data);
            $('#btn_login').prop('disabled', false);
            $('#btn_login').html('Masuk<span class="svg-icon svg-icon-3 ms-1 me-0">\
                <svg xmlns = "http://www.w3.org/2000/svg" width = "24" height = "24" viewBox = "0 0 24 24" fill = "none" >\
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>\
                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>\
                        </svg >\
                    </span>');
            if (data.alert) {
                Swal.fire({
                    title: data.alert.title,
                    text: data.alert.message,
                    icon: icon,
                    buttonsStyling: !1,
                    confirmButtonText: "Ok",
                    customClass: {
                        confirmButton: css_button
                    }
                }).then(function () {
                    if (data.status == true) {
                        location.href = BASE_URL + 'home';
                    }
                });
            } else {
                if (data.required) {
                    const array = data.required.length;
                    for (var i = 0; i < array; i++) {
                        $('#' + data.required[i][0]).append('<span class="text-danger size-12 fadedin">' + data.required[i][1] + '</span>');
                    }
                }
            }
        }
    });
});