const burger = document.querySelector(".nav__burger");
const navItems = document.querySelector(".nav-items");
burger.addEventListener("click", () => {
    burger.classList.toggle("active");
    navItems.classList.toggle("active");
});

// Main slide

const slides = document.querySelectorAll(".slider");
let counter = 1;
slideFun(counter);
let timer = setInterval(autoSlide, 8000);

function autoSlide() {
    counter += 1;
    slideFun(counter);
}

function plusSlide(n) {
    counter += n;
    slideFun(counter);
    resetTimer();
}

function resetTimer() {
    clearInterval(timer);
    timer = setInterval(autoSlide, 8000);
}

function currentSlide(n) {
    counter = n;
    slideFun(counter);
    resetTimer();
}

function slideFun(n) {
    slides.forEach((slide) => (slide.style.display = "none"));
    if (n > slides.length) counter = 1;
    if (n < 1) counter = slides.length;
    slides[counter - 1].style.display = "block";
}

// Tesmonials slide

const tesmonialSlides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".slides-dots");
