$(function () {
    function updateUrlAndReload(key, value) {
        var currentUrl = new URL(window.location);
        currentUrl.searchParams.set(key, value);
        window.location.href = currentUrl.toString();
    }

    $('#sort').on('change', function () {
        var sortValue = $(this).val();
        updateUrlAndReload('sort', sortValue);
    });

    $('#outofstock').on('change', function () {
        var isOutOfStockChecked = $(this).is(':checked');
        updateUrlAndReload('empty', isOutOfStockChecked);
    });
});
