var popUpCart = document.getElementById ('popUpCart');
var cartIcon = document.getElementById ('cartIcon');
var btnClosePopUp = document.getElementById ('btnClosePopUp');

var equipmentNav = document.getElementById ('equipmentNav');
var equipmentMenu = document.getElementById ('equipmentMenu');

var clothesNav = document.getElementById ('clothesNav');
var clothesMenu = document.getElementById ('clothesMenu');


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