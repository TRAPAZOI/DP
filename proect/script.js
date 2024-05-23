 // Получить кнопку
 let mybutton = document.getElementById("scrollToTopBtn");

 // Показать кнопку, когда пользователь прокрутил вниз 20px от верхней части документа
 window.onscroll = function() {
     scrollFunction();
 };

 function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
         mybutton.style.display = "block";
     } else {
         mybutton.style.display = "none";
     }
 }

 // Когда пользователь нажимает на кнопку, прокрутить вверх документа
 mybutton.onclick = function() {
     scrollToTop();
 };

 function scrollToTop() {
     document.body.scrollTop = 0; // Для Safari
     document.documentElement.scrollTop = 0; // Для Chrome, Firefox, IE и Opera
 }


 











 let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    const slides = document.getElementsByClassName("slide");
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }
    slides[slideIndex].classList.add("active");
}

// Функция для автоматического перехода между слайдами
function autoShowSlides() {
    const slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }
    slideIndex++;
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    slides[slideIndex].classList.add("active");
    setTimeout(autoShowSlides, 3000); // Меняем слайд каждые 3 секунды
}

// Запуск функции автопрокрутки при загрузке страницы
autoShowSlides();
