const buttons = document.querySelectorAll('.savollar_btn');

buttons.forEach((button, index) => {
    button.addEventListener('click', function () {
        const answer = this.parentElement.nextElementSibling;
        console.log(answer);
        answer.classList.toggle('show'); // "show" klassini qo'shadi yoki olib tashlaydi

        const img = this.querySelector('img');
        img.classList.toggle('rotate');
    });
});




// --------- enroool  inputs------//



function maskPhoneInput(input) {
    let value = input.value.replace(/\D/g, '');

    if (value.length > 2) {
        value = '(' + value.slice(0, 2) + ') ' + value.slice(2);
    }
    if (value.length > 8) {
        value = value.slice(0, 8) + '-' + value.slice(8);
    }
    if (value.length > 11) {
        value = value.slice(0, 11) + '-' + value.slice(11);
    }

    input.value = value;
}


document.getElementById('phoneInput');


// ----------------------------------------//

new Swiper('.news_card-wrapper', {
    loop: true,
    spaceBetween: 30,

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 2
        }
    }
});