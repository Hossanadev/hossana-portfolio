"use strict"
document.addEventListener('DOMContentLoaded', function() {
    let wordsArray = [
        "Prioritize creating interfaces that are user-friendly, intuitive, and visually appealing.",
        "Embrace a mindset of ongoing learning to stay updated with the latest technologies.",
        "Work seamlessly with cross-functional teams, fostering open communication and collaboration.",
        "Strive for excellence in code quality and performance to deliver efficient solutions.",
        "Stay flexible and open to adopting new technologies in the frontend landscape."
    ];
    let currentIndex = 0;

    let hamburger = document.querySelector('.hamburger');
    let mobile_menu = document.querySelector('.mobile-menu');
    let cv = document.querySelector('#download_cv');
    let sign_up = document.querySelector('#signup');
    let my_values = document.querySelector('#my_values');

    hamburger.addEventListener('click', () => {
        mobile_menu.classList.toggle('-translate-x-[-100%]');
    });
    if (cv) {
        cv.addEventListener('click', () => {
            var pdfUrl = 'https://hossanadev.com/wp-content/uploads/2024/01/HOSSANA-CHUKWUNYERE.pdf';
            var a = document.createElement('a');
            a.download = 'hossana-chukwunyere.pdf';
            a.href = pdfUrl;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        })
    }
    sign_up.addEventListener('click', (e) => {
        e.preventDefault();
    })
    function updateText() {
        if (my_values) {
            my_values.textContent = wordsArray[currentIndex];
        }
        currentIndex = (currentIndex + 1) % wordsArray.length;
    }
    updateText();
    setInterval(updateText, 5000);
});