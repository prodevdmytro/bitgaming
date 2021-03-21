$('.card').on('click', function () {
    $(this).find('.copy').addClass('selected');
});
$('.card').on('mouseleave', function () {
    $(this).find('.copy').removeClass('selected');
});
$('#to_signin').on('click', function() {
    $('#modalLogin form[name="sign_up"]').hide();
    $('#modalLogin form[name="sign_in"]').show();
    $('#modalLogin h4').html($('#modalLogin h4').html().replace('Up', 'In'));
});
$('#to_signup').on('click', function() {
    $('#modalLogin form[name="sign_in"]').hide();
    $('#modalLogin form[name="sign_up"]').show();
    $('#modalLogin h4').html($('#modalLogin h4').html().replace('In', 'Up'));
});