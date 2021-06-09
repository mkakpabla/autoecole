/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
var burger = document.querySelector(".nav__burger");
var navItems = document.querySelector(".nav-items");
burger.addEventListener("click", function () {
  burger.classList.toggle("active");
  navItems.classList.toggle("active");
}); // Main slide

var slides = document.querySelectorAll(".slider");
var counter = 1;
slideFun(counter);
var timer = setInterval(autoSlide, 8000);

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
  slides.forEach(function (slide) {
    return slide.style.display = "none";
  });
  if (n > slides.length) counter = 1;
  if (n < 1) counter = slides.length;
  slides[counter - 1].style.display = "block";
} // Tesmonials slide


var tesmonialSlides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".slides-dots");
/******/ })()
;