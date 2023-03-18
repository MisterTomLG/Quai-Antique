const navCloseEl = document.querySelector('.nav__close');
const navList = document.querySelector('.nav__list');
const navIconEl = document.querySelector('.nav__icon');
const navBgOverlayEl = document.querySelector('.nav__bgOverlay');


window.addEventListener('DOMContentLoaded', () =>{
  document.body.style.visibility = 'visible';
});

const navOpen = () => {
   navList.classList.add('show');
  navBgOverlayEl.classList.add('active');
  document.body.style= 'visibility: visible; height: 100vh; width:100vw; overflow:hidden;';
}

const navClose = () => {
  navList.classList.remove('show');
  navBgOverlayEl.classList.remove('active');
  document.body.style= 'visibility: visible; height: initial; width: 100%; overflow-x: hidden;';
}

navIconEl.addEventListener('click', navOpen);

navCloseEl.addEventListener('click', navClose);

navBgOverlayEl.addEventListener('click', navClose)

// AOS
// AOS.refreshHard();
AOS.init({
  offset: 150, // offset (in px) from the original trigger point
  delay: 150, // values from 0 to 3000, with step 50ms
  duration: 300, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});

// const dishGridEl = Array.from(document.querySelectorAll('#dishGrid'));
// if (dishGridEl.length > 0){
//   // console.log(dishGridEl)
//   dishGridEl.forEach(item => {
//     item.setAttribute('data-aos', 'fade-up');
//   })
// }

// Back to top btn
const toTop = document.querySelector('.top__btn');

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100){
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})

//Menu

const items = document.querySelectorAll('.card');

document.querySelector('#lunchBtn').addEventListener('click', function() {
    items.forEach(item => {
        // console.log(item);
        if (item.id != 'lunch') {
            item.style.display = 'none';
        } else {
            item.style.display = 'grid';
        }
    });
});
document.querySelector('#shakesBtn').addEventListener('click', function() {
    items.forEach(item => {
        // console.log(item);
        if (item.id != 'shakes') {
            item.style.display = 'none';
        } else {
            item.style.display = 'grid';
        }
    });
});
document.querySelector('#dinnerBtn').addEventListener('click', function() {
    items.forEach(item => {
        // console.log(item);
        if (item.id != 'dinner') {
            item.style.display = 'none';
        } else {
            item.style.display = 'grid';
        }
    });
});

document.querySelector('#allBtn').addEventListener('click', function() {
    items.forEach(element => {
        element.style.display = 'grid';
    });
})

const menu_toggle = document.querySelector('.menu-toggle');
		const sidebar = document.querySelector('.sidebar');

		menu_toggle.addEventListener('click', () => {
			menu_toggle.classList.toggle('is-active');
			sidebar.classList.toggle('is-active');
		});