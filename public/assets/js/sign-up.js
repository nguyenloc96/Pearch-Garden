$(document).ready(function() {
    var updateButtonActive = function() {
        var flg = false;
        var sexButtons = $('input[name="user_create_temp_sex"]');
        sexButtons.each(function (e) {
            if($(sexButtons[e]).prop('checked')) {
                flg = true;
            }
        });
        if(userYear() <= 20 && !$('input.checkbox[name="user_create_temp_student"]').prop('checked')) {
            flg = false;
        }
        if(flg) {
            $('.page-signup-body-input .submit input[type=submit]').addClass('active').removeAttr('disabled');
        } else {
            $('.page-signup-body-input .submit input[type=submit]').removeClass('active').attr('disabled', 'disabled');
        }
    };

    var userYear = function() {
        var year = $('select[name="user_create_temp_year"]').val();
        var month = $('select[name="user_create_temp_month"]').val();
        var day = $('select[name="user_create_temp_day"]').val();
        return (Date.now() -  (new Date(year, month, day).getTime())) / (1000 * 60 * 60 * 24 * 365);
    };

    $('input[name="user_create_temp_sex"], input[name="user_create_temp_student"]').click(function (e) {
        updateButtonActive();
    });
    
    $('select[name="user_create_temp_year"], select[name="user_create_temp_month"], select[name="user_create_temp_day"]').change(function (e) {
        e.preventDefault();
        if(userYear() <= 20) {
            $('.input-box.input-box-highschool').show();
        } else {
            $('.input-box.input-box-highschool').hide();
        }
        updateButtonActive();
    });
    updateButtonActive();
});