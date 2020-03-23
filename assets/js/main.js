$(document).ready(function(){
    $('.my-slider').slick({
        arrows: false,
        dots: true,
        infinite: true,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    let height = $(window).height();
    let heightCSS = height.toString() + 'px';
    $(".front-header-page").css("height", heightCSS);

    let paddingCSS = (height/2-100).toString() + 'px';
    $(".front-header-page").css("padding-top", paddingCSS);

    $("#start-button").click(function() {
        $('html, body').animate({
            scrollTop: $("#front-content").offset().top
        }, 1000);
    });
});

