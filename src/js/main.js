document.addEventListener('DOMContentLoaded', () => {
    const optionsMenuToggler = document.querySelector('.options-menu-toggler');
    const menuPopup = document.querySelector('.menu-popup');

    optionsMenuToggler.addEventListener('click', () => {
            menuPopup.classList.toggle('menu-popup-active');
            optionsMenuToggler.classList.toggle('options-menu-toggler-active');
    });
    window.addEventListener('click', (event) => {
        if (menuPopup.classList.contains('menu-popup-active')) {
            if (event.target.classList == 'menu-popup') {
                menuPopup.classList.remove('menu-popup-active');
            }
            // console.log(event.target.class);
        };
    });

})