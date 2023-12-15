import './bootstrap';

document
    .getElementById('imageInput')
    .addEventListener('change', function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    });
