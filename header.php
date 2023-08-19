<?php
include "include.php";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">Raffleitapp</a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="works.php">How it Works</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="about.php">About</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#contact">Contact</a>
</li>
<?php
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
// user is not logged in, display the login link
echo '<li class="nav-item">
<a class="nav-link active" aria-current="page" href="../raffleitapp/login-system/index.php">Login</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link active" aria-current="page" href="../raffleitapp/login-system/register.php">Register</a>
</li>';
} else {
// user is already logged in, display the logout link
echo '<li class="nav-item">
<a class="nav-link active" aria-current="page" href="raffles.php">View Raffles</a>
</li>';
echo '<li class="nav-item">
<a class="nav-link active" aria-current="page" href="../raffleitapp/login-system/index?logout">Logout</a>
</li>';
}
?>
</div>
</div>
</nav>
<nav class="menu">
<ul>
<?php
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
// user is not logged in, display the login link
echo '<li class="item button"><a href="../raffleitapp/login-system/index.php">Login</a></li>';
echo '<li class="item button secondary"><a href="../raffleitapp/login-system/register.php">Sign Up</a></li>';
} else {
// user is already logged in, display the logout link
echo '<li class="item button"><a href="raffles.php">View Raffles</a></li>';
echo '<li class="item button"><a href="../raffleitapp/login-system/index?logout">Logout</a></li>';
// echo '<li class="item profile"><img src="static/images/donat.jpg" alt=""></li>';
}
?>
<li class="toggle"><a href="#"><i class="bx bx-menu"></i></a></li>
</ul>
</nav>
<!-- <img src="" alt=""> -->

<script>
const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
/* Toggle mobile menu */
function toggleMenu() {
if (menu.classList.contains("active")) {
menu.classList.remove("active");

// adds the menu (hamburger) icon 
toggle.querySelector("a").innerHTML = "<i class='bx bx-menu'></i>";
} else {
menu.classList.add("active");

// adds the close (x) icon 
toggle.querySelector("a").innerHTML = "<i class='bx bx-x'></i>";
}
}
/* Event Listener */
toggle.addEventListener("click", toggleMenu, false);

const items = document.querySelectorAll(".item");
/* Activate Submenu */
function toggleItem() {
if (this.classList.contains("submenu-active")) {
this.classList.remove("submenu-active");
} else if (menu.querySelector(".submenu-active")) {
menu.querySelector(".submenu-active").classList.remove("submenu-active");
this.classList.add("submenu-active");
} else {
this.classList.add("submenu-active");
}
}

/* Event Listeners */
for (let item of items) {
if (item.querySelector(".submenu")) {
item.addEventListener("click", toggleItem, false);
item.addEventListener("keypress", toggleItem, false);
}
}


/* Close Submenu From Anywhere */
function closeSubmenu(e) {
if (menu.querySelector(".submenu-active")) {
let isClickInside = menu
.querySelector(".submenu-active")
.contains(e.target);
if (!isClickInside && menu.querySelector(".submenu-active")) {
menu.querySelector(".submenu-active").classList.remove("submenu-active");
}
}
}
/* Event listener */
document.addEventListener("click", closeSubmenu, false);
</script>


<!-- profile -->