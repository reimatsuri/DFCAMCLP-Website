document.addEventListener("DOMContentLoaded", () => {
    const burgerMenu = document.querySelector(".burger-menu");
    const navigationLinks = document.querySelector(".navigation-links-container");

    burgerMenu.addEventListener("click", () => {
        navigationLinks.classList.toggle("active");
    });
});