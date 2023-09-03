import './bootstrap';

//Permite que Vite versione las imágenes 
import.meta.glob([
    '../images/**',
    // '../fonts/**',
  ]);
  
/* ENCABEZADO */
const btnMenu = document.querySelector('.header__menu-toggle-btn');
const btnMenuIcon = btnMenu.querySelector('i');
const dropdownMenu = document.querySelector('.header__drop-down');

btnMenu.addEventListener('click', (e)=>{
  const isOpen = dropdownMenu.classList.toggle('open');

  btnMenuIcon.classList.toggle('fa-xmark', isOpen);
  btnMenuIcon.classList.toggle('fa-bars', !isOpen);

})