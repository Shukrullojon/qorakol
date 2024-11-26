new Swiper('.teacher_card-wrapper', {
    loop: true,
    spaceBetween: 30,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: false
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


    loopFillGroupWithBlank: true,


    // Responsive breakpoints     
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        630: {
            slidesPerView: 2
        },
        860: {
            slidesPerView: 3
        },
        1240: {
            slidesPerView: 4
        }
    }
});

