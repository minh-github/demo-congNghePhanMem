let menuDropdown = document.querySelector('.menu-dropdown')
let subMenu = document.querySelector('.sub-menu')
let close = document.querySelector('.close')
let mobileMenu = document.querySelector('.mobile-menu')
let overlay = document.querySelector('.overlay')
let btnMenu = document.querySelector('.btn-menu')
let mobileMenuDropdown = document.querySelector('.mobile-menu-dropdown')
let mobileSubMenu = document.querySelector('.mobile-sub-menu')

menuDropdown.addEventListener('click', function() {
    subMenu.classList.toggle('active')
})

close.addEventListener('click', function() {
    mobileMenu.classList.toggle('active')
    overlay.classList.toggle('active')
});

btnMenu.addEventListener('click', function() {
    mobileMenu.classList.toggle('active')
    overlay.classList.toggle('active')
});

overlay.addEventListener('click', function() {
    mobileMenu.classList.toggle('active')
    overlay.classList.toggle('active')
})

mobileMenuDropdown.addEventListener('click', function() {
    mobileSubMenu.classList.toggle('active')
    mobileMenuDropdown.classList.toggle('active')
});