function goto(navEl, event){
    event.preventDefault();
    let element = document.querySelector(`#${navEl}`);
    element.scrollIntoView({ behavior: "smooth" });
    toggleMenu(event);
};
const toggleMenu = (event) => {
    event.preventDefault()
    const iconMenu = document.querySelector(".menu-icon");
    if (iconMenu) {
        const menuBody = document.querySelector(".navbar");
        menuBody.classList.toggle("active");
        iconMenu.classList.toggle("active");
    }
};
