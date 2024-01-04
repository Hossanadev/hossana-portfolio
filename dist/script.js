"use strict"
document.addEventListener('DOMContentLoaded', function() {
    let hamburger = document.querySelector('.hamburger');
    let mobile_menu = document.querySelector('.mobile-menu');
    let cv = document.querySelector('#download_cv');
    let sign_up = document.querySelector('#sign_up');

    hamburger.addEventListener('click', () => {
        mobile_menu.classList.toggle('-translate-x-[-100%]');
    });
    cv.addEventListener('click', () => {
        var pdfUrl = 'http://localhost/wordpress/wp-content/uploads/2024/01/cv.pdf';
        var a = document.createElement('a');
        a.download = 'hossana-chukwunyere.pdf';
        a.href = pdfUrl;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    })
    sign_up.addEventListener('click', (e) => {
        e.preventDefault();
    })
});