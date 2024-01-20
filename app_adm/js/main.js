// Efeito click coração

function clickHeart() {
    $(document).ready(function() {
        $('#heartIcon').click(function() {
            $(this).toggleClass('clicked');
        })
    })
}

clickHeart();

// Fim efeito click coração


// Slick.js 
function slick() {
    $('.slide-adm').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3500,
        fade: true,
        cssEase: 'linear'
    });

    $('.center-mode').slick({
        arrows: false,
        dots: false,
        slidesToShow: 4,
    });

    $('.data-mode').slick({
        arrows: false,
        dots: false,
        slidesToShow: 4,
    });
}

slick();

// Fim slick.js



