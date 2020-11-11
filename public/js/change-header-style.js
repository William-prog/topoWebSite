let scrollPosition = window.scrollY;
// Desktop elements
const navigation = document.getElementById('desktop-nav');
const logo = document.getElementById('desktop-logo');
// Mobile elements
const mobileNavigation = document.getElementById('mobile-nav');
const mobileLogo = document.getElementById('mobile-logo');
const mobileMenu = document.getElementById('mobile-menu');
// Anchors
const anchorElement = document.getElementsByClassName('nav-anchor');
// Page´s current title
var pageTitle = document.title;

console.log(pageTitle);

if (pageTitle.includes('C')) {
        logo.src = 'img/logo2.png';
        mobileLogo.src = 'img/logo2.png';
        mobileMenu.src = 'img/menu.png'; 

        navigation.classList.add('scrolled');
    mobileNavigation.classList.add('scrolled');
    
    for (let i = 0; i < anchorElement.length; i ++) {
        anchorElement[i].classList.add('scrolled-anchor');
    }
}