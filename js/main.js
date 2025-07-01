"use strict";
// menu
const body = document.body;
const menu = document.getElementById("header__menu");
const overlay = document.getElementById("menu__overlay");
const nav = document.querySelector(".header__nav");
const menuListAnimation = (nav) => {
    const menuArr = nav.querySelectorAll("ul > li");
    menuArr.forEach((value, num) => {
        value.classList.toggle("is-animation");
        num += 2;
        value.style.transition = `opacity ${num * 1}s, transform ${num * 0.2}s  ease-in-out`;
    });
};
const showMenu = (menu, overlay, nav, body) => {
    if (menu && overlay && nav && body) {
        menu.addEventListener("click", () => {
            menu.classList.toggle("is-show");
            overlay.classList.toggle("is-show");
            nav.classList.toggle("is-show");
            body.classList.toggle("is-fixed");
            menuListAnimation(nav);
        });
    }
};
showMenu(menu, overlay, nav, body);
