window.onload = function() {
    $('#email__submit').on('click', function() {
        $('#write__email').hide();
        $('#write__access__code').css('display', 'flex');
    });
}