function updatemenu() {
  if (document.getElementById('responsive-menu').checked == true) {
    document.getElementById('menu').style.borderBottomRightRadius = '0';
    document.getElementById('menu').style.borderBottomLeftRadius = '0';
  } else {
    document.getElementById('menu').style.borderRadius = '10px';
  }
}

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');

const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnlogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', () => {
  wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
  wrapper.classList.remove('active');
});
btnPopup.addEventListener('click', () => {
  wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click', () => {
  wrapper.classList.remove('active-popup');
})