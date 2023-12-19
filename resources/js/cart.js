import axios from 'axios';

$(function () {
    $('.remove-from-cart').on('click', function () {
        const productId = $(this).data('product-id');

        axios.delete('/cart/' + productId).then((response) => {
            $(this).closest('.product-card').remove();
            $('.order-summary')
                .find(`[data-product-id="${productId}"]`)
                .remove();
            $('#total-price').text(formatToRupiah(response.data.total_price));
        });
    });

    function formatToRupiah(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
        })
            .format(number)
            .replace(/,00$/, '');
    }
});
