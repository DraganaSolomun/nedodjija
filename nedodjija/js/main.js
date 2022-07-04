$(window).on('scroll', function() {
    var scroll = $(window).scrollTop();

    if(scroll >= 120){
        $('.navbar').addClass('sticky');
    }
    else{
        $('.navbar').removeClass('sticky');
    }
});