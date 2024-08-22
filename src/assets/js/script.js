var popUpCart = document.getElementById ('popUpCart');
var cartIcon = document.getElementById ('cartIcon');
var btnClosePopUp = document.getElementById ('btnClosePopUp');

var equipmentNav = document.getElementById ('equipmentNav');
var equipmentMenu = document.getElementById ('equipmentMenu');

var clothesNav = document.getElementById ('clothesNav');
var clothesMenu = document.getElementById ('clothesMenu');

var iconBurger = document.getElementById ('iconBurger');
var iconCross = document.getElementById ('iconCross');
var menu = document.getElementById ('menu');


cartIcon.addEventListener('mouseover', function () { 
    popUpCart.classList.toggle('on'); 
});

btnClosePopUp.addEventListener('click', function () {
    popUpCart.classList.toggle('on');
})

equipmentNav.addEventListener('mouseover', function () {
    equipmentMenu.classList.toggle('on');
})

clothesNav.addEventListener('mouseover', function () {
    clothesMenu.classList.toggle('on');
})

iconBurger.addEventListener('click',function () {
    menu.classList.toggle('on');
})

iconCross.addEventListener('click',function () {
    menu.classList.toggle('on');
})
