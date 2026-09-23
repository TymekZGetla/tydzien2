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