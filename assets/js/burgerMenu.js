
// burger menu
menu_btn = document.getElementById('menu-button');

menu_btn.addEventListener('click', () => {
    menu_btn.classList.toggle('active');
    document.getElementById('line-1').classList.toggle('active');
    document.getElementById('line-2').classList.toggle('active');
    document.getElementById('line-3').classList.toggle('active');
    // $("#menu").slideToggle("slow");
  });