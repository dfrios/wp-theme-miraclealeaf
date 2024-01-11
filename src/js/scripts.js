var modalDiv;

document.addEventListener('DOMContentLoaded', function() {

  const splideClassElement = document.getElementsByClassName('splide');
  
  if (splideClassElement.length > 0) {
    const splideProducts = new Splide('.splide#carousel-products', {
      arrows :'false' ,
      type    : 'loop',
      // perPage : 1,
      autoplay: true,
      // cover: false,
      // height : '100rem',
      height: '100%'
    });
    splideProducts.mount();

    const splideTestimonials = new Splide('.splide#carousel-testimonials', {
      arrows :'false' ,
      type    : 'loop',
      // perPage : 1,
      autoplay: true,
      // cover: false,
      // height : '100rem',
      height: '100%'
    });
    splideTestimonials.mount();
  }
});


document.addEventListener("click", (e) => {

  if (e.target.id === "btn-contact") {
    e.preventDefault();
    sendContact();
  }

  if ((e.target.id === "a-return-policies") || (e.target.id === "a-shipping-policies")) {
    modalDiv = document.getElementById(e.target.dataset.id);
    openModal(modalDiv);
  }
  else if ((e.target.className === "modal-close") || (e.target.className === "modal-close-shipping")) {
    closeModal(modalDiv);
  }
  else {
    return;
  }
});


const openModal = (modal) => {
  document.body.style.overflow = "hidden";
  modal.setAttribute("open", "true");
  document.addEventListener("keydown", escClose);
  let overlay = document.createElement("div");
  overlay.id = "modal-overlay";
  document.body.appendChild(overlay);
};

const closeModal = (modal) => {
  document.body.style.overflow = "auto";
  modal.removeAttribute("open");
  document.removeEventListener("keydown", escClose);
  document.body.removeChild(document.getElementById("modal-overlay"));
};

const escClose = (e) => {
  if (e.keyCode == 27) {
    closeModal(modalDiv);
  }
};

const sendContact = () => {
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const cellphone =  document.getElementById('cellphone').value;
  const message =  document.getElementById('message').value;

  console.debug(name, email, cellphone, message);

  const data="key=value";
  const request = new XMLHttpRequest();
  request.open('POST', 'https://mlcolombia.com/contact-ajax.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
  
  request.onreadystatechange = function() {
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
      console.log('succeed');
      myresponse.value = request.responseText;
    } else {
      console.log('server error');
    }
  };
  
  request.onerror = function() {
    console.log('something went wrong');
  };
  
  request.send(data);
};