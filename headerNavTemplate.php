<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daikyo International Philippines Inc.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav-ss.css">
</head>

<body>
<header>
    <img src="media/DIPI%20Typologo.svg" alt="dipi-logo" id="dipiLogo">
    <img src="media/burger.svg" alt="hamburger" id="hamburger">
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="dipi-products.php">Products</a>
        <a href="dipi-about.php">About</a>
        <a href="dipi-employment.php">Employment</a>
        <a href="dipi-news.php">News</a>
        <a href="dipi-companyEvents.php">Company Events</a>
        <a href="dipi-contacts.php">Contact</a>
    </div>

    <div class="nav-mobile">
        <img src="media/close-light.svg" alt="close-light" id="close-light">
        <a href="index.php">Home</a>
        <a href="dipi-products.php">Products</a>
        <a href="dipi-about.php">About</a>
        <a href="dipi-employment.php">Employment</a>
        <a href="dipi-news.php">News</a>
        <a href="dipi-companyEvents.php">Company Events</a>
        <a href="dipi-contacts.php">Contact</a>
    </div>
</header>

<script>
    hamburger = document.querySelector("#hamburger");
    hamburger.onclick = function () {
        navMobile = document.querySelector(".nav-mobile");
        navMobile.classList.toggle("active");
    }
    closeLight = document.querySelector("#close-light");
    closeLight.onclick = function () {
        navMobile = document.querySelector(".nav-mobile");
        navMobile.classList.toggle("active");
    }
</script>
