// Ajouter la classe "active" à l'icône de la maison si on est sur la page d'accueil
document.addEventListener('DOMContentLoaded', () => {
    const homeIcon = document.querySelector('.home-icon');
    if (window.location.pathname.includes('index.html')) {
        homeIcon.classList.add('active');
    } else {
        homeIcon.classList.remove('active');
    }
});

// ===== Carrousel Générique (Header uniquement) =====
document.addEventListener('DOMContentLoaded', () => {
    initGenericCarousels();
    initTestimonialsCarousel();
    initPepiniereCarousel();
  });
  
  function initGenericCarousels() {
    const carousels = document.querySelectorAll('[data-carousel]');
  
    carousels.forEach(carousel => {
      // Ignorer les carrousels spéciaux
      if (carousel.classList.contains('testimonials-carousel') || carousel.classList.contains('pepiniere-carousel')) return;
  
      const slides = carousel.querySelectorAll('.carousel-slide');
      let currentIndex = 0;
  
      function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
        currentIndex = index;
      }
  
      function nextSlide() {
        const next = (currentIndex + 1) % slides.length;
        showSlide(next);
      }
  
      // Défilement automatique toutes les 5 secondes
      setInterval(nextSlide, 5000);
      showSlide(0);
    });
  }
  
  // ===== Carrousel Témoignages (3 visibles) =====
  function initTestimonialsCarousel() {
    const carousel = document.querySelector('.testimonials-carousel-inner');
    const slides = document.querySelectorAll('.testimonial-slide');
    const prevBtn = document.querySelector('.testimonials-prev-btn');
    const nextBtn = document.querySelector('.testimonials-next-btn');
  
    let currentIndex = 0;
    const visibleSlides = 3;
    const totalSlides = slides.length;
  
    function showSlide(index) {
      const slideWidth = slides[0].offsetWidth + 20; // + margin
      carousel.style.transform = `translateX(-${index * slideWidth}px)`;
      currentIndex = index;
    }
  
    function nextSlide() {
      if (currentIndex < totalSlides - visibleSlides) {
        showSlide(currentIndex + 1);
      } else {
        showSlide(0); // retour au début
      }
    }
  
    function prevSlide() {
      if (currentIndex > 0) {
        showSlide(currentIndex - 1);
      } else {
        showSlide(totalSlides - visibleSlides); // aller à la fin
      }
    }
  
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
  
    setInterval(nextSlide, 5000); // Auto-slide
    showSlide(0);
  }
  
  
  // ===== Carrousel Pépinière  =====
  function initPepiniereCarousel() {
    const carousel = document.querySelector('.pepiniere-carousel-inner');
    const slides = document.querySelectorAll('.pepiniere-slide');
    const dots = document.querySelectorAll('.pepiniere-dots .dot');
    let isTransitioning = false;
    let autoScrollInterval;
    let currentIndex = 0;
  
    function updateDots() {
      dots.forEach(dot => dot.classList.remove('active'));
      dots[currentIndex % dots.length].classList.add('active');
    }
  
    function slideNext() {
      if (isTransitioning) return;
      isTransitioning = true;
  
      const slideWidth = slides[0].offsetWidth + 20;
      carousel.style.transition = 'transform 0.5s ease-in-out';
      carousel.style.transform = `translateX(-${slideWidth}px)`;
  
      setTimeout(() => {
        carousel.appendChild(carousel.firstElementChild);
        carousel.style.transition = 'none';
        carousel.style.transform = 'translateX(0)';
        isTransitioning = false;
        currentIndex = (currentIndex + 1) % slides.length;
        updateDots();
      }, 500);
    }
  
    // Auto défilement
    function startAutoScroll() {
      autoScrollInterval = setInterval(slideNext, 4000);
    }
  
    function stopAutoScroll() {
      clearInterval(autoScrollInterval);
    }
  
    // Clique sur un dot = avancer jusqu’à celui-là
    dots.forEach(dot => {
      dot.addEventListener('click', () => {
        const targetIndex = parseInt(dot.dataset.index);
        let steps = (targetIndex - currentIndex + slides.length) % slides.length;
  
        stopAutoScroll();
  
        // Rejoue "steps" fois slideNext()
        let count = 0;
        const interval = setInterval(() => {
          slideNext();
          count++;
          if (count >= steps) {
            clearInterval(interval);
            startAutoScroll();
          }
        }, 5000); // délai entre chaque saut
      });
    });
  
    startAutoScroll();
    updateDots();
  }
  

  
  // ===== Menu Mobile =====
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const menusBar = document.querySelector('.menus-bar');
    const body = document.body;

    if (!mobileMenuBtn || !menusBar) {
        console.error('Éléments du menu mobile non trouvés');
        return;
    }

    // Gestion du menu hamburger
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenuBtn.classList.toggle('active');
        menusBar.classList.toggle('active');
        body.classList.toggle('menu-open');
    });

    // Gestion des sous-menus
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('a');
        const submenu = dropdown.querySelector('.dropdown-content');

        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                submenu.style.maxHeight = dropdown.classList.contains('active') ? 
                    `${submenu.scrollHeight}px` : '0';
            }
        });
    });

    // Fermer le menu en cliquant à l'extérieur
    document.addEventListener('click', (e) => {
        if (!menusBar.contains(e.target) && 
            !mobileMenuBtn.contains(e.target) && 
            menusBar.classList.contains('active')) {
            
            mobileMenuBtn.classList.remove('active');
            menusBar.classList.remove('active');
            body.classList.remove('menu-open');
        }
    });
});
  
  
  
;




