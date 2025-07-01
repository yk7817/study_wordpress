// menu
const body = document.body as HTMLBodyElement;
const menu = document.getElementById("header__menu") as HTMLSpanElement;
const overlay = document.getElementById("menu__overlay") as HTMLElement;
const nav = document.querySelector(".header__nav") as HTMLElement;

const menuListAnimation = (nav: HTMLElement): void => {
  const menuArr = nav.querySelectorAll("ul > li") as NodeListOf<HTMLLIElement>;
  menuArr.forEach((value, num) => {
    value.classList.toggle("is-animation");
    num += 2;
    value.style.transition = `opacity ${num * 1}s, transform ${
      num * 0.2
    }s  ease-in-out`;
  });
};

const showMenu = (
  menu: HTMLSpanElement,
  overlay: HTMLElement,
  nav: HTMLElement,
  body: HTMLBodyElement
): void => {
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
