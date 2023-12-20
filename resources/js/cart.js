import axios from 'axios';
import formatToRupiah from './formatToRupiah';
import itemCounter from './itemCounter';

function updateSubTotal() {
    let newSubTotal = 0;
    $('.product-card').each(function () {
        const productQuantity = parseInt($(this).find('.item-quantity').val());
        const productPrice = parseFloat($(this).find('.product_price').val());

        newSubTotal += productQuantity * productPrice;
    });
    $('.total-price').text(formatToRupiah(newSubTotal));
}

$(function () {
    const items = $('.product-card');

    itemCounter(items, (event, newQuantity) => {
        const productCard = $(event.target).closest('.product-card');
        const price = parseInt(productCard.find('.product_price').val());
        const productId = parseInt(productCard.find('.product_id').val());

        const $productPrice = $(
            `.product-price-card[data-product-id=${productId}] .product-price`
        );
        const $productQuantity = $(
            `.product-price-card[data-product-id=${productId}] .product-quantity`
        );

        $productQuantity.text(newQuantity);
        $productPrice.text(formatToRupiah(newQuantity * price));

        updateSubTotal();
    });

    $('.remove-from-cart').on('click', function () {
        const productId = $(this).data('product-id');

        axios
            .delete(`/cart/${productId}`)
            .then((response) => {
                $(this).closest('.product-card').remove();
                $('.order-summary')
                    .find(`[data-product-id="${productId}"]`)
                    .remove();
                updateSubTotal();
            })
            .catch((error) => {
                console.error('Error removing item from cart:', error);
                // Handle the error (e.g., show a notification to the user)
            });
    });
});
