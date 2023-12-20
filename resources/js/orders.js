$(function () {
    $('.view-payment').on('click', function (event) {
        event.stopPropagation();
        const fileInput = $(this).closest('.order').find('.payment-proof')[0];

        if (fileInput && fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $('#payment-image').attr('src', e.target.result);
                $('#payment-overlay').css('display', 'flex');
            };
            reader.readAsDataURL(fileInput.files[0]);
        } else {
            $('#payment-image').attr('src', '');
            alert('Belum ada bukti pembayaran yang diupload');
            $('#payment-overlay').hide();
        }
    });

    $('#payment-overlay').on('click', function () {
        $(this).hide();
    });
});
