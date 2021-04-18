const showMenu = (toggleId, navbarId, mainId, headerId) => {
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId),
    bodyPadding = document.getElementById(mainId),
    headerPadding = document.getElementById(headerId);

    if(toggle && navbar){
        toggle.addEventListener('click', () => {
            navbar.classList.toggle('expander');
            bodyPadding.classList.toggle('body-pd');
            headerPadding.classList.toggle('header-pd')
        })


    }
}

showMenu('nav-toggle', 'navbar', 'main', 'main-header');


const linkColor = document.querySelectorAll('.nav__link');


function colorLink(){
    linkColor.forEach( l => l.classList.remove('active'));
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink));

const linkCollapse = document.querySelector('.collapse__link');

linkCollapse.addEventListener('click', () => {
    collapseMenu = document.querySelector('.collapse__menu');
    collapseMenu.classList.toggle('collapseShow');
    linkCollapse.classList.toggle('rotate');
})