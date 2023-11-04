  const burger = document.querySelector(".burger")
  const navItems = document.querySelector(".nav-items")

  burger.addEventListener('click',()=>{
  navItems.classList.toggle('mobile-menu')
  })
  