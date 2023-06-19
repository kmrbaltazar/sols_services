// Added the same class only for the header nav items
document.getElementById('menu-item-22').classList.add('services_menu');
document.getElementById('menu-item-21').classList.add('services_menu');
document.getElementById('menu-item-31').classList.add('services_menu');
document.getElementById('menu-item-30').classList.add('services_menu');
document.getElementById('menu-item-18').classList.add('services_menu');
document.getElementById('menu-item-17').classList.add('services_menu');

// Menu for tablet and mobile screens
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
})

document.querySelectorAll(".services_menu").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}))

// Go to top button
let mybutton = document.getElementById("mybutton");

window.onscroll = function(){
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.classList.remove('no-display');
  } else {
    mybutton.classList.add('no-display');
  }
}