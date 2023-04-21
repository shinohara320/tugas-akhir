let sliderContainer = document.querySelector('.slider-container');
let prevButton = document.getElementById('prev');
let nextButton = document.getElementById('next');

let sliderWidth = sliderContainer.offsetWidth;
let sliderIndex = 0;

prevButton.addEventListener('click', () => {
  sliderIndex--;
  if (sliderIndex < 0) {
    sliderIndex = sliderContainer.children.length - 1;
  }
  sliderContainer.style.transform = `translateX(-${sliderIndex * sliderWidth}px)`;
});

nextButton.addEventListener('click', () => {
    sliderIndex++;
    if (sliderIndex >= sliderContainer.children.length) {
      sliderIndex = 0;
    }
    sliderContainer.style.transform = `translateX(-${sliderIndex * sliderWidth}px)`;
});   