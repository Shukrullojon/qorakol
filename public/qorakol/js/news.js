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


function formatPhoneNumber(value) {
    if (!value) return value;

    const phoneNumber = value.replace(/[^\d]/g, '');
    const phoneNumberLength = phoneNumber.length;

    if (phoneNumberLength < 3) return phoneNumber;


    let formattedNumber = `(${phoneNumber.slice(0, 2)}) `;
    if (phoneNumberLength > 2) {
        formattedNumber += phoneNumber.slice(2, 5);
    }
    if (phoneNumberLength > 5) {
        formattedNumber += ` - ${phoneNumber.slice(5, 7)}`;
    }
    if (phoneNumberLength > 7) {
        formattedNumber += ` - ${phoneNumber.slice(7, 9)}`;
    }

    return formattedNumber;
}

function phoneNumberFormatter() {
    const inputField = document.getElementById('phoneInput');
    const formattedInputValue = formatPhoneNumber(inputField.value);
    inputField.value = formattedInputValue;
}

document.getElementById('phoneInput').addEventListener('input', phoneNumberFormatter);



new Swiper('.news_card-wrapper', {
    loop: true,
    spaceBetween: 30,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
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