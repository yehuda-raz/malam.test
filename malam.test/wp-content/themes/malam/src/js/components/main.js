



jQuery(document).ready(($) => {

    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4500,
        dots: false,
        rtl: true,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 999,
                settings: {
                    arrows: true,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    dots: true,
                }
            }
        ]

    })
});

