import axios from 'axios';

$(function () {
    const productId = $('#product-id').val();
    const productPrice = $('#product-price').val();
    let productQuantity = $('#item-quantity').val();

    const maxQuantity = parseInt($('#item-quantity').attr('max'), 10);
    const minQuantity = parseInt($('#item-quantity').attr('min'), 10);

    function updateQuantity(change) {
        let inputValue = parseInt($('#item-quantity').val(), 10);
        let newValue = inputValue + change;

        if (newValue >= minQuantity && newValue <= maxQuantity) {
            productQuantity = newValue;
            let subtotal = productQuantity * productPrice;
            $('#item-quantity').val(newValue);
            $('#total-price').text(formatToRupiah(subtotal));
        } else if (newValue > maxQuantity) {
            alert('Stok tidak cukup');
        } else if (newValue < minQuantity) {
            alert('Minimal pembelian 1 item');
        }
    }

    $('#add-item').on('click', function () {
        updateQuantity(1);
    });

    $('#reduce-item').on('click', function () {
        updateQuantity(-1);
    });

    $('#add-to-cart').on('click', function () {
        axios
            .post('/cart', {
                product_id: productId,
                product_quantity: productQuantity,
                price_per_item: productPrice,
            })
            .then(() => {
                alert('Barang berhasil ditambahkan ke Keranjang');
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
