const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
});

window.addEventListener('DOMContentLoaded', function() {
    var skillsBar = document.querySelector('.SkillsBar');
    skillsBar.scrollLeft = (skillsBar.scrollWidth - skillsBar.clientWidth) / 2;
  });
