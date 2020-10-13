let scrollPosition = window.scrollY;
const navigation = document.getElementById('desktop-nav');
const logo = document.getElementById('desktop-logo');
const anchorElement = document.getElementsByClassName('nav-anchor');


function addClassOnScroll() {
    navigation.classList.add('scrolled');
    
    for (let i = 0; i < anchorElement.length; i ++) {
        anchorElement[i].classList.add('scrolled-anchor');
    }
}

function removeClassOnScroll() {
    navigation.classList.remove('scrolled');
    
    for (let i = 0; i < anchorElement.length; i ++) {
        anchorElement[i].classList.remove('scrolled-anchor');
    }
}

window.addEventListener('scroll', function() {
    scrollPosition = window.scrollY;

    if (scrollPosition >= 110) {
        addClassOnScroll(navigation);        
        logo.src = 'img/logo2.png';
        
    } else {
        removeClassOnScroll(navigation);        
        logo.src = 'img/logo.png';
    }
})