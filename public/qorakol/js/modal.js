const openBtns = document.querySelectorAll('.open_iframe'); // Barcha tugmalarni olish
const iframeModal = document.querySelector('.vido_iframe'); // Faqat bitta modalni olish
const closeBtn = document.querySelector('.iframe_close'); // Modalni yopish tugmasi
const overlay = document.createElement('div'); // Orqa fonni yaratish
const iframe = iframeModal.querySelector('iframe'); // Iframe elementini olish
const originalSrc = iframe.src; // Original YouTube videosi havolasi

overlay.classList.add('modal-overlay');
document.body.appendChild(overlay);

// Har bir open_iframe tugmasiga hodisa bog'lash
openBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
        // Modalni ochish
        iframeModal.classList.add('show_iframe');
        overlay.classList.add('show_iframe');
        iframe.src = originalSrc; // Videoni boshlash
    });
});

// Modalni yopish uchun 'iframe_close' tugmasiga bosish hodisasi
closeBtn.addEventListener('click', function () {
    iframeModal.classList.remove('show_iframe');
    overlay.classList.remove('show_iframe');
    iframe.src = ''; // Videoni to'xtatish
});

// Overlay'ga bosganda modalni yopish
overlay.addEventListener('click', function () {
    iframeModal.classList.remove('show_iframe');
    overlay.classList.remove('show_iframe');
    iframe.src = ''; // Videoni to'xtatish
});
