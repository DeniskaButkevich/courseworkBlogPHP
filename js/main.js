window.addEventListener('load', function () {

    let arr_input = ['name', 'email', 'subject', 'message'];
    

    arr_input.forEach(element => {
        $("#" + element).click( function() {
            document.getElementById(element).style.borderBottomColor = '#ced4da';
        });
    });
    
    $("#done").click(function () {
        let fail = [];

        $('messsageShow').hide();  

        arr_input.forEach(function(element) {
            if ($('#' + element).val().length <= 0) {
                fail.push(element);
            }
        });

        if (fail.length > 0) {
            fail.forEach(function(element) {
                let atr = document.getElementById(element);
                atr.style.transition = '.5s ease-out';
                atr.style.borderBottomColor = 'red';
            });
            return false;
        }
        $.ajax({
            url: 'ajax/feedback.php',
            type: 'POST',
            cache: false,
            data: { 'name': $('#' + arr_input[0]).val(), 
                    'email':  $('#' + arr_input[1]).val(),
                    'subject':  $('#' + arr_input[2]).val(),
                    'message':  $('#' + arr_input[3]).val(),
            },
            dataType: 'html',
            success: function (data) {
                $('#messageShow').html("<p>" + data + "</p>");
                $('#messsageShow').show();
            }
        });
    });
});
// ced4da