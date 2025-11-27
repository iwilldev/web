<!DOCTYPE html>
<html>
<head>
<title>About</title>

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
            onclick='location.href="."'>
            Home
        </button>
        <button 
            type="button"; 
            onclick='location.href="https://github.com/iwilldev"'>
            Github
        </button>
        <button 
            type="button"; 
            onclick='location.href="./about.html"'>
            About
        </button>
    </p>
</div>

<div class="page">
<h1>About Me</h1>



<h2>Who am I you ask?</h2>
<p>I am a college student who has no job. I am looking for an internship to get my name out there.
Hopefully with time and patience, my portfolio site and Gitub will attract employers. You can also find me on LinkedIn.</p>

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