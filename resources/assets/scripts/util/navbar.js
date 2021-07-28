// popup menu
const popupMenuButton = document.getElementById('popup-menu-button');

popupMenuButton.onclick = function () {
  const menu = document.getElementById('popup-menu');
  menu.classList.toggle('hidden');
}

// navbar menu mobile
const navbarMenuButton = document.getElementById('mobile-menu-button');

navbarMenuButton.onclick = function () {
  const menu = document.getElementById('mobile-menu');
  menu.classList.toggle('hidden');
}