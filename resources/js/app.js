import jQuery from 'jquery';

window.$ = window.jQuery = jQuery;

$('.toast').each(function () {
    $(this).delay(4000).fadeOut('slow');
});
