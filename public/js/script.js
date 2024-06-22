document.addEventListener('DOMContentLoaded', function () {
  AOS.init();

  const menuNav = document.querySelector(".navbar");
  const navbarToggle = document.querySelector('.navbar-toggler');
  const navbarCollapse = document.querySelector('.navbar-collapse');

  if (menuNav && navbarToggle) {
    navbarToggle.addEventListener('click', () => {
      const isNavActive = menuNav.classList.contains('nav-scroll-active');

      menuNav.classList.toggle("nav-scroll-active", !isNavActive);
      navbarCollapse.classList.toggle("show", !isNavActive);

      // Tambahkan event listener untuk menutup navbar ketika di-klik di luar
      document.addEventListener('click', function (event) {
        const isNavbarToggler = event.target.closest('.navbar-toggler');
        const isNavbarMenu = event.target.closest('.navbar-collapse');

        if (!isNavbarToggler && !isNavbarMenu && navbarCollapse.classList.contains('show')) {
          navbarCollapse.classList.remove('show');
          menuNav.classList.remove("nav-scroll-active");
        }
      });
    });

    window.addEventListener("scroll", () => {
      menuNav.classList.toggle("nav-scroll-active", window.scrollY > 0);
      if (navbarCollapse.classList.contains('show')) {
        navbarCollapse.classList.remove('show');
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {
  var counters = document.querySelectorAll('.counter');
  var speed = 200; // Ubah kecepatan pertambahan angka di sini
  
  counters.forEach(counter => {
    var target = +counter.getAttribute('data-target');
    var count = 0;

    var updateCounter = function() {
      var increment = target / speed;

      count += increment;

      if (count < target) {
        counter.innerText = Math.ceil(count);
        requestAnimationFrame(updateCounter);
      } else {
        counter.innerText = target;
        counter.classList.add('animate');
      }
    };

    updateCounter();
  });
});

