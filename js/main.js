// Slick.js 

function slick(){
    $('.single-item').slick({
      dots:false,
      arrows:false,
      infinite:true,
      speed:300,
      autoplay:true,
      autoplaySpeed:3500,
      fade:true,
      cssEase:'linear'
    });

    $('.center-mode').slick({
        arrows:false,
        dots:false,
        slidesToShow: 4,
    });

    $('.data-mode').slick({
        arrows:false,
        dots:false,
        slidesToShow: 4,
    });
}

slick();


// Fim slick.js














