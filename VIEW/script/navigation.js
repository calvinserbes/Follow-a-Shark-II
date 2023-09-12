  // responsive navbar
  const burger = document.querySelector(".burger")
  const navItems = document.querySelector(".nav-items")

  burger.addEventListener('click',()=>{
  navItems.classList.toggle('mobile-menu')
  })
  
  // change color navbar on scroll
  document.addEventListener("DOMContentLoaded", function () {
  let nav = document.querySelector(".navigation");
  let btn = document.querySelector(".btn");
  let logo = document.querySelector(".logo")

  window.addEventListener("scroll", function () {
  let scrollPosition = window.scrollY;
  let navHeight = (82.5 / 100) * window.innerHeight;

  if (scrollPosition >= navHeight) {
    nav.classList.add("color-change");
    btn.classList.add("color-btn-change");
    logo.src = "assets/images/logo_white.svg";
  } else {
    nav.classList.remove("color-change");
    btn.classList.remove("color-btn-change");
    logo.src = "assets/images/logo_linear.svg";
  }
  });
  });