import './bootstrap';

// Initialize Feather Icons
document.addEventListener('DOMContentLoaded', () => {
    feather.replace();
    
    // Mobile menu logic
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Scroll Animations using Intersection Observer
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    });

    animatedElements.forEach(el => observer.observe(el));

    // Initialize Swiper for Hero
    if(document.querySelector('.hero-swiper')) {
        new Swiper('.hero-swiper', {
            loop: true,
            effect: 'fade',
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    // Countdown Timer logic for Upcoming Events
    const countdownDate = new Date('2026-06-15T09:00:00').getTime();
    
    if (document.getElementById('countdown-days')) {
        const timer = setInterval(() => {
            const now = new Date().getTime();
            const distance = countdownDate - now;
            
            if (distance < 0) {
                clearInterval(timer);
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('countdown-days').innerText = String(days).padStart(2, '0');
            document.getElementById('countdown-hours').innerText = String(hours).padStart(2, '0');
            document.getElementById('countdown-minutes').innerText = String(minutes).padStart(2, '0');
            document.getElementById('countdown-seconds').innerText = String(seconds).padStart(2, '0');
        }, 1000);
    }
});
