<!-- All JavaScript files============================== -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Plugins for this template -->
<script src="/assets/js/jquery-plugin-collection.js"></script>

<!-- Custom script for this template -->
<script src="/assets/js/script.js"></script>

<!-- font awesome -->
<script src="https://kit.fontawesome.com/e631eca424.js" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- reviews -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
<script>
jQuery(document).ready(function($) {

    $(".regular").slick({
        dots: true,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
        autoplay: true,
              arrows: true,
              mobileFirst: true,
              easing: 'easeOutElastic',
              speed: 800,
        autoplay: true,
        autoplaySpeed: 9000,
        speed: 700,
        mobileFirst: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnHover: false,
        respondTo: 'min',
        cssEase: 'linear',
        prevArrow: '<span class="icon-angle-left"></span>',
        nextArrow: '<span class="icon-angle-right"></span>'
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        draggable: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 200,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '10px',
        prevArrow: '<span class="icon-angle-left"></span>',
        nextArrow: '<span class="icon-angle-right"></span>',
        responsive: [{
                breakpoint: 450,
                settings: {
                    dots: false,
                    slidesToShow: 3,
                    centerPadding: '0px',
                }
            },
            {
                breakpoint: 420,
                settings: {
                    autoplay: true,
                    dots: false,
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
        ]
    });





});
</script>