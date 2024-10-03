const openBtn = document.querySelector('.open_iframe');
const iframeModal = document.querySelector('.vido_iframe');
const closeBtn = document.querySelector('.iframe_close');
const overlay = document.createElement('div');
const iframe = iframeModal.querySelector('iframe');
const originalSrc = iframe.src;

overlay.classList.add('modal-overlay');
document.body.appendChild(overlay);

openBtn.addEventListener('click', function () {
    iframeModal.classList.add('show_iframe');
    overlay.classList.add('show_iframe');
    iframe.src = originalSrc;
});

closeBtn.addEventListener('click', function () {
    iframeModal.classList.remove('show_iframe');
    overlay.classList.remove('show_iframe');
    iframe.src = '';
});

overlay.addEventListener('click', function () {
    iframeModal.classList.remove('show_iframe');
    overlay.classList.remove('show_iframe');
    iframe.src = '';
});
