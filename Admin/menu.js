var left_nav = document.getElementById("nav-left");

function showMenu() {

    if (left_nav.style.display === "none") {
        left_nav.style.display = "inline-block";
        
    } else {
        left_nav.style.display = "none";
  
    }
}
