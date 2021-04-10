"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var optionsMenuToggler = document.querySelector('.options-menu-toggler');
  var menuPopup = document.querySelector('.menu-popup');
  optionsMenuToggler.addEventListener('click', function () {
    menuPopup.classList.toggle('menu-popup-active');
    optionsMenuToggler.classList.toggle('options-menu-toggler-active');
  });
  window.addEventListener('click', function (event) {
    if (menuPopup.classList.contains('menu-popup-active')) {
      if (event.target.classList == 'menu-popup') {
        menuPopup.classList.remove('menu-popup-active');
      } // console.log(event.target.class);

    }

    ;
  });
});