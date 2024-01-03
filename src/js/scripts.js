var modalDiv;

document.addEventListener('DOMContentLoaded', function() {

  const splideClassElement = document.getElementsByClassName('splide');
  
  if (splideClassElement.length > 0) {
    const splide = new Splide('.splide');
    splide.mount();
  }
});


document.addEventListener("click", (e) => {
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