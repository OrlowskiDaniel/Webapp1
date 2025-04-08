function showSidebar() {
    const sidebar = document.querySelector(".sidebar")
    sidebar.style.display = "flex"
}
function hideSidebar() {
    const sidebar = document.querySelector(".sidebar")
    sidebar.style.display = "none"
}

function showDescription() {
    const description = document.querySelector(".product-description-mobile")
    description.style.display = "flex"
}
function hideDescription() {
    const description = document.querySelector(".product-description-mobile")
    description.style.display = "none"
}



document.addEventListener("DOMContentLoaded", () => {
    const basket = document.querySelector(".basket");
    const footer = document.querySelector("footer");
    

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                basket.classList.add("hidden-basket");
            } else {
                basket.classList.remove("hidden-basket");
            }
        });
    }, { threshold: 0.1 });

    observer.observe(footer);
    
});