$(document).ready(function () {

    $("#subscribeForm").submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: 'register/submit',
            type: 'GET',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data, textStatus, xhr) {
                if (xhr.status == 200 && data) {
                    $('#subscribe').html('<p id="reponse" class="col-md-11 text-center mt-2" style="color: #58b1b1;font-weight: 500;">Thanks for registering we will contact you when jobi is live.</p>');
                }else if(xhr.status == 200 && data != 1) {
                    $('#subscribe').html('<p id="reponse" class="col-md-11 text-center mt-2" style="color: red;font-weight: 500;">Something went wrong, Please try again!</p>');
                }
            },
            complete: function (xhr, textStatus) {
                if (xhr.status != 200) {
                    $('#subscribe').html('<p id="reponse" class="col-md-11 text-center mt-2" style="color: red;font-weight: 500;">Something went wrong, Please try again!</p>');
                }
            }
        });
    });
});
