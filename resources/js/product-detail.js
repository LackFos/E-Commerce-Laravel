import itemCounter from './itemCounter';
import formatToRupiah from './formatToRupiah';

$(function () {
    const productPrice = $('#product-price').val();

    function updateSubtotal(newQuantity) {
        const subtotal = newQuantity * productPrice;
        $('.total-price').text(formatToRupiah(subtotal));
    }

    const item = $('.product');
    itemCounter(item, (event, newQuantity) => {
        updateSubtotal(newQuantity);
    });
});
