document.addEventListener('scroll', () => 
{
    const banner = document.getElementsByClassName('banner')[0];
    //console.log(window.scrollY);


    if (window.scrollY > 0)
    {
        banner.classList.add('scrolled');
    } else 
    {
        banner.classList.remove('scrolled');
    }
});
