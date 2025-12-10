<?php
include "scripts.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<link rel="stylesheet" href="main.css">

<style>
html { color-scheme: light dark; }

</style>
</head>
<body>

<?php
include "navbar.php";
?>

<div class="page">
<h1>Under Construction...</h1>
<p>You can contact me via <a href=https://github.com/iwilldev/>Github</a>, <a href=https://www.linkedin.com/in/WilliamBarbee/>Linkedin</a>, or my <a href="mailto:AlexBarbee@go.rmc.edu">Email</a>.</p>
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



<?php include "ending.php"?>
