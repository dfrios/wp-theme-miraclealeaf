document.addEventListener('DOMContentLoaded', function() {

  const splideClassElement = document.getElementsByClassName('splide');
  
  if (splideClassElement.length > 0) {
    const splide = new Splide('.splide');
    splide.mount();
  }
});