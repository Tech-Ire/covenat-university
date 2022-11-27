var navlinks = document.getElementById("navlinks");

function showMenu() {
    navlinks.style.display = "block"
    navlinks.style.right = "0";
    console.log("Menu shown")
}
function hideMenu() {
    navlinks.style.right = "-200px";
    navlinks.style.display = "none";
    console.log("Menu closed")

}