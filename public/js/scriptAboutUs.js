let autoplayInterval;

function startAutoplay() {
    autoplayInterval = setInterval(function () {
        nextSlide();
    }, 5000); // Задайте бажаний інтервал часу в мілісекундах (у цьому випадку 5000 мс або 5 секунд)
}

// Запустіть автопрогравання при завантаженні сторінки
startAutoplay();

// Зупиніть автопрогравання при наведенні на слайдер
document.querySelector(".sliderAbout").addEventListener("mouseenter", function () {
    clearInterval(autoplayInterval);
});

// Відновіть автопрогравання при відведенні від слайдера
document.querySelector(".sliderAbout").addEventListener("mouseleave", function () {
    startAutoplay();
});
