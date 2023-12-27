$(function () {
    $('#sort').on('change', function (e) {
        var newSortValue = e.target.value;
        var currentUrl = new URL(window.location);
        // Use URLSearchParams for query string manipulation
        var searchParams = currentUrl.searchParams;
        searchParams.set('sort', newSortValue); // Set or update the 'sort' parameter

        // Update the URL in the address bar and reload the page
        window.location.href = currentUrl.toString();
    });

    $('#outofstock').on('change', function (e) {
        var newSortValue = $(this).is(':checked');
        var currentUrl = new URL(window.location);
        // Use URLSearchParams for query string manipulation
        var searchParams = currentUrl.searchParams;
        searchParams.set('empty', newSortValue); // Set or update the 'sort' parameter

        // Update the URL in the address bar and reload the page
        window.location.href = currentUrl.toString();
    });
});
