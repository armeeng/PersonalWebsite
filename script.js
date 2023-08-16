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


  const homeButton = document.querySelector('.navbar__links[href="#home"]');

  homeButton.addEventListener('click', function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  
  // var skillsBar = document.querySelector('.SkillsBar');
  // skillsBar.scrollLeft = (skillsBar.scrollWidth - skillsBar.clientWidth) / 2;


  const skillsBar = document.querySelector('.SkillsBar');
  const skills = document.querySelectorAll('.Skill');

  skillsBar.addEventListener('scroll', function() {


    const scrolledAmount = skillsBar.scrollLeft;
    const centerIndex = Math.floor((scrolledAmount - 50) / 160);

  for (let n = 0; n < skills.length; n++) {
      skills[n].style.filter = 'grayscale(1)';

  }

    skills[centerIndex].style.filter = 'grayscale(0)';


  });

});




const modals = document.querySelectorAll('.MoreInfo');
const openModals = document.querySelectorAll('.MoreInfoButton');
const closeModals = document.querySelectorAll('.CloseButton');

openModals.forEach((openModal, index) => {
  openModal.addEventListener('click', () => {
    modals[index].showModal();
  });
});

closeModals.forEach((closeModal, index) => {
  closeModal.addEventListener('click', () => {
    modals[index].close();
  });
});

const checkboxes = document.querySelectorAll('[name="accordion"]');
    
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            checkboxes.forEach(otherCheckbox => {
                if (otherCheckbox !== this) {
                    otherCheckbox.checked = false;
                }
            });
        }
    });
});

const accordion = document.querySelector(".accordion");

accordion.addEventListener("click", (e) => {

  const activePanel = e.target.closest(".accordion-panel");
  if(!activePanel) return;
  toggleAccordion(activePanel);
  console.log(activePanel);

});

function toggleAccordion(panelToActivate) {

  const buttons = panelToActivate.parentElement.querySelectorAll('button');
  const contents = panelToActivate.parentElement.querySelectorAll('.accordion-content')

  buttons.forEach((button) => {
    button.setAttribute("aria-expanded", false);
  });

  contents.forEach((content) => {
    content.setAttribute("aria-hidden", true);
  });

  panelToActivate.querySelector('button').setAttribute('aria-expanded', true);
  panelToActivate.querySelector('.accordion-content').setAttribute('aria-hidden', false);


}



