$(document).ready(function() {

    var input_email = $('#applyForm input[name=email]');
    var input_name = $('#applyForm input[name=name]');
    var input_origin = $('#applyForm select[name=origin]');

    validate_focusout(input_email);
    validate_focusout(input_name);
    validate_focusout(input_origin);

    function validate_focusout(input_field) {

        input_field.focusout(function() {
            if (input_field.val() == '') {
                input_field.closest('.card').css({ "border-color": "red" });
                if (input_field.attr('name') != 'origin')
                    input_field.css({ "border-bottom-color": "red" });
                input_field.next('#validation').html('<p class="mt-3 mb-1" style="color:red;"> <span class="fa fa-question-circle-o"></span> This is a required question</p>');

            } else {
                input_field.closest('.card').css({ "border-color": "#e1e1e1" });
                if (input_field.attr('name') != 'origin')
                    input_field.css({ "border-bottom-color": "#e1e1e1" });
                input_field.next('#validation').html('');
            }
        });
    }

    function validate_submit(input_field) {

        if (input_field.val() == '') {
            input_field.closest('.card').css({ "border-color": "red" });
            if (input_field.attr('name') != 'origin')
                input_field.css({ "border-bottom-color": "red" });
            input_field.next('#validation').html('<p class="mt-3 mb-1" style="color:red;"> <span class="fa fa-question-circle-o"></span> This is a required question</p>');

        } else {
            input_field.closest('.card').css({ "border-color": "#e1e1e1" });
            if (input_field.attr('name') != 'origin')
                input_field.css({ "border-bottom-color": "#e1e1e1" });
            input_field.next('#validation').html('');
        }
    }

    $("#applyForm").submit(function(e) {
        e.preventDefault();

        validate_submit(input_email);
        validate_submit(input_name);
        validate_submit(input_origin);

        if (input_email.val() == '' || input_name.val() == '' || input_origin.val() == '')
            return;

        var formData = $(this).serialize();

        $.ajax({
            url: 'apply/submit',
            type: 'GET',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(data, textStatus, xhr) {
                if (xhr.status == 200 && data) {
                    $('.cardHeader').html('<h3>Application Tester Role</h3><br><p>Thank you for your interest. <br> We will be in contact to let you know of the outcome within <br> the next 2-4 weeks. </p> <a href="./apply"><u>Submit another response.</u></a>');
                    $('.cardHeader').closest('.card').siblings().hide();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
                } else if (xhr.status == 200 && data != 1) {
                    $('.cardHeader').html('<h3>Application Tester Role</h3><br><p style="color: red;">Something went wrong, Please try again! </p> <a href="./apply"><u>Submit another response.</u></a>');
                    $('.cardHeader').closest('.card').siblings().hide();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
                }
            },
            complete: function(xhr, textStatus) {
                if (xhr.status != 200) {
                    $('.cardHeader').html('<h3>Application Tester Role</h3><br><p style="color: red;">Something went wrong, Please try again! </p> <a href="./apply"><u>Submit another response.</u></a>');
                    $('.cardHeader').closest('.card').siblings().hide();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
                }
            }
        });
    });
});