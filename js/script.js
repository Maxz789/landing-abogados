// animación simple al cargar
document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".content").style.opacity = 0;

    setTimeout(() => {
        document.querySelector(".content").style.transition = "all 1.2s ease";
        document.querySelector(".content").style.opacity = 1;
    }, 300);
});