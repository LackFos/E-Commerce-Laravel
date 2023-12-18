import axios from 'axios';

$(function () {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('#add-item').on('click', function () {
        axios.post('/cart/add', {
            product_id: 1,
            product_quantity: 1,
            price_per_item: 1000,
        });
    });
});
