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
  var slides = document.getElementsByClassName("rotating-slide");
  var dots = document.getElementsByClassName("slide-dot");
  for (i = 0; i < slides.length; i++) {
    // slides[i].style.display = "none";  
    slides[i].className = slides[i].className.replace(" active-slide", "");
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active-dot", "");
  }
  // slides[slideIndex-1].style.display = "block";  
  slides[slideIndex-1].className += " active-slide";
  dots[slideIndex-1].className += " active-dot";
  setTimeout(showSlides, 5500); // Change image every 2 seconds
}

// grab the elements we need to reference
const switchContent = document.querySelectorAll('[data-variant-content]');
const switchButtonControls = document.querySelectorAll('span[data-variant-index]');

// when there are buttons, attach the switchVariants function to the click event
if (switchButtonControls !== null) {
  [...switchButtonControls].forEach(switchButtonControl => {
    switchButtonControl.addEventListener('click', () => {
      const currentVariant = switchButtonControl.dataset.variantIndex;
      switchVariants(currentVariant);
      // stop the auto rotation once user clicks a dot
      clearTimeout(slideIndex);
    });
  });
}

// the function that makes it all work
function switchVariants(variant) {
  // this makes sure the right content displays
  const activeContent = document.querySelectorAll('.active-slide');
  const selectedContent = document.querySelectorAll(`[data-variant-content='${variant}']`);
  [...activeContent].forEach(div => {
    div.classList.remove('active-slide');
  });
  [...selectedContent].forEach(div => {
    div.classList.add('active-slide');
  }); 
  
   // this makes sure the pills and dropdown are in sync (when applicable)
  if (switchButtonControls !== null) {
    const currentSwitchButton = document.querySelector('.active-dot');
    const newSwitchButton = document.querySelector(`span[data-variant-index="${variant}"]`);
    currentSwitchButton.classList.remove('active-dot');
    newSwitchButton.classList.add('active-dot');
  }
}



