$(document).ready(function () {
    $('#imageInput').on('change', function (event) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').attr('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
});
