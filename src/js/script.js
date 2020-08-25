window.addEventListener('DOMContentLoaded', () => {

    // Hamburger on first screen
    const hamburger = document.querySelector('.hamburger'),
      close = document.querySelector('.menu__close'),
      menu = document.querySelector('.menu');

    hamburger.addEventListener('click', () => {
        menu.classList.add('active');
    });

    close.addEventListener('click', () => {
        menu.classList.remove('active');
    });

    // progress bar 4 screen

    const percents = document.querySelectorAll('.skills__progress-percent'),
          barActive = document.querySelectorAll('.skills__progress-bar-active');
    

    function stringToNumber (str) {
        return +str.textContent.slice(0, -1);
    }

    percents.forEach((percent, index) => {
        barActive[index].style.width = `${stringToNumber(percent)}%`;
    });
})



