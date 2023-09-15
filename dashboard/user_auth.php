<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "include.php" ?>
</head>

<body>
    <section class="top-nav">
        <nav>
            <img src="static/uploads/21lib.jpg" alt="" class="logo">
            <div class="other">
                <ul>
                    <li class="SMS_name"></li>
                    <?php
                    if(!isset($_SESSION["email"])){
                        ?>
                        <li><a href="">Register</a></li>
                    <?php } else { ?>
                        <li><a href="">Register</a></li>
                    <?php } ?>
                    <li><a href="">Settings</a></li>
                </ul>
                <img src="static/uploads/21lib.jpg" alt="" class="profile" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="sub-Menu">
                    <div class="profile-menu">
                        <div class="user-info">
                            <img src="static/uploads/imagesSMS1.jpg" alt="">
                            <h5>OLUK AARON LEONARD</h5>
                        </div>
                        <hr>
                        <div class="profile-links">
                            <li>
                                <a href="#" class="sub-menu-link">
                                    <i class="bx bx-cog"></i>
                                    <span>Inbox</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sub-menu-link">
                                    <i class="bx bx-cog"></i>
                                    <span>Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sub-menu-link">
                                    <i class="bx bx-cog"></i>
                                    <span>Account Setting</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sub-menu-link">
                                    <i class="bx bx-cog"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <script>
            let subMenu = document.getElementById("sub-Menu");

            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }
        </script>
    </section>
    <?php
    include "footer.php";
