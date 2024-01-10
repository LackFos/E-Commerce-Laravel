export default function createQuantityUpdater(items, callback) {
    items.each(function () {
        const item = $(this);
        const quantityInput = item.find('.item-quantity');
        const addButton = item.find('.add-item');
        const reduceButton = item.find('.reduce-item');

        let productQuantity = quantityInput.val();
        const maxQuantity = parseInt(quantityInput.attr('max'));
        const minQuantity = parseInt(quantityInput.attr('min'));

        function updateQuantity(event, change) {
            const currentQuantity = parseInt(quantityInput.val());
            const newQuantity = currentQuantity + change;

            if (newQuantity >= minQuantity && newQuantity <= maxQuantity) {
                quantityInput.val(newQuantity);
                productQuantity = newQuantity;
                callback(event, newQuantity);
            } else {
                alert(
                    newQuantity > maxQuantity
                        ? `Stok hanya tersisa ${maxQuantity}`
                        : 'Minimal pembelian 1 item'
                );
            }
        }

        addButton.on('click', function (event) {
            updateQuantity(event, 1);
        });

        reduceButton.on('click', function (event) {
            updateQuantity(event, -1);
        });
    });
}
