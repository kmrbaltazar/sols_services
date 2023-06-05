// Burger Menu
let burgerIcon = document.getElementById('burger-icon');
let mobileMenu = document.getElementById('mobile-menu');

// Nav menu
document.getElementById('menu-item-22').classList.add('services_menu');
document.getElementById('menu-item-21').classList.add('services_menu');
document.getElementById('menu-item-31').classList.add('services_menu');
document.getElementById('menu-item-30').classList.add('services_menu');
document.getElementById('menu-item-18').classList.add('services_menu');
document.getElementById('menu-item-17').classList.add('services_menu');

let headerMenu = document.getElementsByClassName('services_menu');

// Toggle Function
burgerIcon.onclick = function(){
    mobileMenu.classList.toggle('hidden');
};

// When the menu is open and an item is clicked, the menu should close
if (!mobileMenu.classList.contains('hidden')){
    for (let i=0; i < headerMenu.length; i++){
        headerMenu[i].onclick = function(){
            // event.preventDefault(); // Prevent default click behavior
            mobileMenu.classList.add('hidden');
        }
    }
}