<?php

ini_set('display_errors', 0); // Enable error display
ini_set('display_startup_errors', 1); // Enable display of startup errors
error_reporting(E_ALL); // Report all types of errors
include "scripts.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<link rel="stylesheet" href="main.css">

<style>
html { color-scheme: light dark; }
font-family: Tahoma, Verdana, Arial, sans-serif; }
</style>
</head>
<body>


<div class="banner"> 
    <p>
    arcfuse
        <button 
            type="button"; 
            onclick='location.href="/"'>
            Home
        </button>
        <button 
            type="button"; 
            onclick='location.href="https://github.com/iwilldev"'>
            Github
        </button>
        <button 
            type="button"; 
            onclick='location.href="./about"'>
            About
        </button>
    </p>
</div>

<div class="page">
<h1>Under Construction...</h1>
<p>You can contact me via <a href=https://github.com/iwilldev/>Github</a>, <a href=https://www.linkedin.com/in/william-barbee-6613592b4/>Linkedin</a>, or my <a href="mailto:AlexBarbee@go.rmc.edu">Email</a>.</p>
<p>I have many projects. Many will soon be detailed on this website</p>




<img src="qrcode.png" alt="QR to my Github page"style="width:80px;height:80px;">
</br>
<img src="pantera.png" alt="One of my favorite cars, the Detomaso Pantera."style="width:460px;height:460px;">

<p>My site is using the <a href=https://www.nordtheme.com/>Nord Color Palette</a></p>

<p>This server is running on 4gb of ram</p>


<?php

    $uptime = getUptime();
    echo "<p>Server Uptime: " . $uptime . "</p>";
?>

<p>For online documentation and support please refer to
<a href="http://nginx.org/">nginx.org</a></p></br>
</div>
</body>

<script>
    document.addEventListener('scroll', () => 
    {
        const banner = document.getElementsByClassName('banner')[0];
        console.log(window.scrollY);

    
        if (window.scrollY > 0)
        {
            banner.classList.add('scrolled');
        } else 
        {
            banner.classList.remove('scrolled');
        }
    });
</script>
</html>
