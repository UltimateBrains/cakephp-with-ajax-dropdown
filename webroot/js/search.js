$(function() {
    $('#name').on('blur', function() {
        $.ajax({
            type: 'POST',
            url: $('form').attr('action'),
            dataType : 'json',
            data: {name : $('#name').val()},
            success: function(data, textStatus, jqXHR) {
                // do whatever you want
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // do whatever you want
            }
        });
    });
});