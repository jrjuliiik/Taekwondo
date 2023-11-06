// https://www.youtube.com/@CodingMaker
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', () => {
  wrapper.classList.add('activ');
});

loginLink.addEventListener('click', () => {
  wrapper.classList.remove('activ');
});

btnPopup.addEventListener('click', () => {
  wrapper.classList.add('activ-popup');
});

iconClose.addEventListener('click', () => {
  wrapper.classList.remove('activ-popup');
});
