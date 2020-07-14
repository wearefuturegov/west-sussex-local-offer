// import initPinboard from "./pinboard"

window.addEventListener("DOMContentLoaded", () => {
    initMobileMenu()
    // initPinboard()
})

const initMobileMenu = () => {
    const toggle = document.querySelector(".site-header__menu-toggle")
    const menu = document.querySelector(".site-header__menu")
    
    if(toggle && menu){
        toggle.addEventListener("click", () => {
            if(menu.classList.contains("active")){
                toggle.innerHTML = "Menu"
                menu.classList.remove("active")
                toggle.setAttribute("aria-expanded", "false")
            } else {
                toggle.innerHTML = "Close"
                menu.classList.add("active")
                toggle.setAttribute("aria-expanded", "true")
            }
        })
    }
}


