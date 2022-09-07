$(document).ready(function() {
    $('.toolkit-item').css('margin-top', 20)
    $('.toolkit-item').each(function(i) {
        $(this).delay(100*i)
        .animate({
            'marginTop' : "-=20px",
            'opacity' : '100%'
        }, 400)
    });
});

