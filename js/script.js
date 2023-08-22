let menu = document.querySelector('#menu-btn');
let navega = document.querySelector('.header .navega');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navega.classList.toggle('active');
};
