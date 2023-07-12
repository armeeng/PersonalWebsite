document.addEventListener('DOMContentLoaded', function () {
  const menu = document.querySelector('#mobile-menu');
  const menuLinks = document.querySelector('.navbar__menu');

  menu.addEventListener('click', function () {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
  });

  const aboutButton = document.querySelector('.navbar__links[href="#about"]');

  aboutButton.addEventListener('click', function (event) {
    event.preventDefault();
    const aboutSection = document.getElementById('about');
    const offset = 100; // Adjust this value to set the desired offset
    const top = aboutSection.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({ top, behavior: 'smooth' });
  });

  const learnButton = document.querySelector('.main__btn');

  learnButton.addEventListener('click', function (event) {
    event.preventDefault();
    const aboutSection = document.getElementById('about');
    const offset = 100; // Adjust this value to set the desired offset
    const top = aboutSection.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({ top, behavior: 'smooth' });
  });

  const educationButton = document.querySelector('.navbar__links[href="#education"]');

  educationButton.addEventListener('click', function (event) {
    event.preventDefault();
    const educationSection = document.getElementById('education');
    const offset = 100; // Adjust this value to set the desired offset
    const top = educationSection.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({ top, behavior: 'smooth' });
  });

  var skillsBar = document.querySelector('.SkillsBar');
  skillsBar.scrollLeft = (skillsBar.scrollWidth - skillsBar.clientWidth) / 2;

  const homeButton = document.querySelector('.navbar__links[href="#home"]');

  homeButton.addEventListener('click', function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

});
