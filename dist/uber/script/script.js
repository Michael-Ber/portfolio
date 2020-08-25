window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu'),
          short_menu = document.querySelector('.short_menu');

    short_menu.addEventListener('click', () => {
        if(menu.classList.contains('activity')) {
            menu.classList.remove('activity');
            menu.style.left = '-50%';
        }else {
            menu.classList.add('activity');
            menu.style.left = 0
        }

        if(short_menu.classList.contains('activity')) {
            short_menu.classList.remove('activity');
        }else {
            short_menu.classList.add('activity')
        }
    })
})