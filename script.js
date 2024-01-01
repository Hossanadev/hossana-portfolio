let hamburger = document.querySelector('.hamburger');
let mobile_menu = document.querySelector('.mobile-menu');

hamburger.addEventListener('click', () => {
    mobile_menu.classList.toggle('-translate-x-[-100%]');
})