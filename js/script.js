

let manageBtn = document.querySelector('.manageBtn');
manageBtn.addEventListener('click',() => {
    let subMenu = document.querySelector('ul.menu ul');
    let arrowExpand = document.querySelector('ul.menu li a i');
    subMenu.classList.toggle('show');
    arrowExpand.classList.toggle('rotate');
})

let tabs = document.querySelectorAll('[data-tab-target]');
let tabContent = document.querySelectorAll('[data-tab-content]');
tabs.forEach(tab => tab.addEventListener('click',() => {
    let tabTarget = tab.dataset.tabTarget;
    let targetContent = document.querySelector(tabTarget)
    tabs.forEach(l => l.classList.remove('active'));
    tab.classList.add('active');
    tabContent.forEach(content => content.classList.remove('active'))
    targetContent.classList.add('active');
    
}))

let mieTest = document.querySelector('.miehod');

mieTest.addEventListener('keypress', (t) => {
    var a = String.fromCharCode(t.keyCode);
    var b = t.keyCode;
    if(b < 97){
        t.preventDefault()
    }
})


