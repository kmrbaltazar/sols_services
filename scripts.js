// Burger Menu
let burgerIcon = document.getElementById('burger-icon');
let mobileMenu = document.getElementById('mobile-menu');

burgerIcon.onclick = function(){
    mobileMenu.classList.toggle('hidden');
};
