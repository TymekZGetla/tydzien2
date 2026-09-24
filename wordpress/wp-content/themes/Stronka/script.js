function toggleMenu() 
{
    document.getElementById("menuDropdown").classList.toggle("active");
}
const modeButton = document.querySelector(".darkmode");

modeButton.addEventListener("click", function() {

    document.body.classList.toggle("dark");

    if (document.body.classList.contains("dark")) {

        modeButton.textContent = "light_mode";

    } else {

        modeButton.textContent = "dark_mode";

    }

});

const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 20,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});