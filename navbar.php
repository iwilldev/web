<?php
date_default_timezone_set('America/New_York'); 
$currentDateTime = date('h:i'); 
?>


<div class="banner"> 
    <p>
    arcfuse
        <button 
            type="button"; 
            onclick='location.href="https://arcfuse.cc"'>
            Home
        </button>
        <button 
            type="button"; 
            onclick='location.href="https://github.com/iwilldev"'>
            Github
        </button>
        <button 
            type="button"; 
            onclick='location.href="https://arcfuse.cc/about"'>
            About
        </button>
        <button 
            type="button"; 
            onclick='location.href="https://arcfuse.cc/projects/"'>
            Projects
        </button>
        <!--
        <div class=miniclock>
          <?php echo $currentDateTime;?>
        </div>
        
        -->
    </p>
</div>