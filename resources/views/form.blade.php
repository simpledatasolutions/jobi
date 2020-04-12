<html>

<head>
  <title>Dynamic Forms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container-sm mt-5">
        <div class="offset-md-2 col-md-8">
            <div class="card">
                <div class="card-header"><b>Dynamic Tax Form </b></div>
                <div class="card-body">
                    <form id="dynamicForm" class="col-md-10">
                        <div class="form-group">
                            <label>How old are you?</label>
                            <input type="number" class="form-control" question-id="1" placeholder="Answer">
                        </div>
                    </form>
                    <div class="offset-5 spinner-border text-muted" id="loader" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>

$(document).ready(function() {

    $('#dynamicForm').submit(function(e) {
        e.preventDefault();
        return false;
    });
    
    $(document).on('focusout', '#dynamicForm input', function() {

        var input = $(this);

        if($(this).val() != '') {
    
            $('#loader').show();
            $(this).attr('readonly', true);

            $.ajax({
                url: 'form/questions',
                type: 'GET',
                data: { 'question_id': input.attr('question-id'), 'answer': input.val() },
                success: function(data) {
                    $('#loader').hide();
                    $('#dynamicForm').append(data);
                }
            });
        }
    });


});

</script>

</html>