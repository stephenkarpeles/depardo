// Accordion
const accordionContainers = document.querySelectorAll('.accordion-container');

for (let i = 0; i < accordionContainers.length; i++) {
  let accordionContainer = accordionContainers[i];
  accordionContainer.addEventListener('click', function() {
    this.classList.toggle('is-open-accordion');
  });
}

// Automatic Rotating Text
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName('rotating-slide');
  var dots = document.getElementsByClassName('slide-dot');
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(' slide-dot--is-active', '');
  }
  slides[slideIndex-1].style.display = 'block';  
  dots[slideIndex-1].className += ' slide-dot--is-active';
  setTimeout(showSlides, 6000); // Change every 6 seconds
}

