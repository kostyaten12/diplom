import './bootstrap';


const burgerMenu = document.querySelector('.burger-menu');
const menu = document.querySelector('.menu');

burgerMenu.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
    menu.classList.toggle('active'); // Добавляем класс active для дополнительных стилей
});



console.log("JavaScript файл успешно подключен!");