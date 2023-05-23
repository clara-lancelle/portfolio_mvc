let scroll_up_btn = document.getElementById("scroll_up_btn");
let scroll_down_btn = document.getElementById("scroll_down_btn");
let menu_btn = document.getElementById("menu-button");
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scroll_up_btn.style.display = "block";
  } else {
    scroll_up_btn.style.display = "none";
  }
}

// $(function() {
//   $('.scroll-down').click (function() {
//     $('html, body').animate({scrollTop: $('#moi').offset().top }, 'slow');
//     return false;
//   });
// });

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

scroll_up_btn.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

scroll_down_btn.addEventListener('click', () => {
  document.getElementById('moi').scrollIntoView({
    behavior: 'smooth'
  })
});

// modal 

// Get the <span> element that closes the modal
let span = document.querySelector('.close');

// When the user clicks the button, open the modal 

document.addEventListener('click',(e) => {
    if(e.target.classList.contains('modalBtn')) {
        let getNextModal = (elem, selector) => {
            let sibling = elem.nextElementSibling;
            while (sibling) {
                if (sibling.matches(selector)) {
                    return sibling;
                } else {
                    sibling = sibling.nextElementSibling;
                }
            }
        };
        let modal = getNextModal(e.target, '.modal');
        console.log(modal);
        modal.style.display = "block";
    }
    if(e.target.classList.contains('close')) {
        e.target.closest('.modal').style.display = "none";
    }
})
