$(function () {
    $('#sort').on('change', function (e) {
        console.log(e.target.value);
        var newSortValue = e.target.value;
        var currentUrl = new URL(window.location);

        // Use URLSearchParams for query string manipulation
        var searchParams = currentUrl.searchParams;
        searchParams.set('sort', newSortValue); // Set or update the 'sort' parameter

        // Update the URL in the address bar and reload the page
        window.location.href = currentUrl.toString();
    });
});
