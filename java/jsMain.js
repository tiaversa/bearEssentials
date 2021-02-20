const navSlide = () => {
    const burger = document.querySelector('.menuSandwich');
    const nav = document.querySelector('.navLinks');
    const navLinks = document.querySelectorAll('.navLinks li')

    burger.addEventListener('click', () => {
        //toggle nav
        nav.classList.toggle('nav-active');

        //animate links
    navLinks.forEach((link,index)=>{
        if(link.getElementsByClassName.animation){
            link.getElementsByClassName.animation = '';
        } else{
            link.getElementsByClassName.animation = `navLinkFade 0.5 ease forwards ${index / 5 + 1.5}s`;
        }
    });
    //burger animation
    burger.classList.toggle('toggle');



    });

}
navSlide();