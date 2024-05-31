$(document).ready(function() {
    $('.menu-item').click(function(event) {
        event.preventDefault();
        var page = $(this).data('page');

        $.ajax({
            url: '/load-content',
            method: 'GET',
            data: {page: page},
            success: function(response) {
                $('#dynamic-content').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});