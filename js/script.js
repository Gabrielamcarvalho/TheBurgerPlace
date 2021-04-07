//Adding hamburger menu effect, selecting hamburger
const hamburger = document.getElementById('hamburger');
// selecting main nav
const mainNav = document.getElementById('js-menu');

//hamburger event, when clicked the nav menu will appear
hamburger.addEventListener('click', function () {
  mainNav.classList.toggle('active');
  hamburger.classList.toggle('rotate');
});

// faq buttons
const btns = document.querySelectorAll('.question-btn');
//when clicked in the button, it will change its design and text will appear/ hide
btns.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    const question = e.currentTarget.parentElement.parentElement;
    question.classList.toggle('show-text');
  });
});
