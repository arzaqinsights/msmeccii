import './bootstrap';
import "@hotwired/turbo";
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

// Register Alpine plugins
Alpine.plugin(intersect);

// Make Alpine available globally
window.Alpine = Alpine;

// Start Alpine — it will auto-detect x-data on initial load
Alpine.start();

/**
 * Turbo + Alpine compatibility:
 * After every Turbo page visit, Alpine needs to re-initialize new elements
 * that were injected into the DOM by Turbo's body swap.
 */
document.addEventListener('turbo:load', () => {
    // Re-init Alpine on Turbo navigations (not the initial page load)
    // Alpine.start() is idempotent — safe to call again
    // But we need to use initTree for Turbo-replaced body content
    document.querySelectorAll('[x-data]').forEach(el => {
        if (!el._x_dataStack) {
            Alpine.initTree(el);
        }
    });

    // Scroll Animations — Intersection Observer
    const animatedElements = document.querySelectorAll('.animate-on-scroll:not(.visible)');
    if (animatedElements.length > 0) {
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
    }

    // Hero Swiper
    if (document.querySelector('.hero-swiper')) {
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

    // Sector Slider Swiper
    if (document.querySelector('.sector-slider')) {
        new Swiper('.sector-slider', {
            slidesPerView: 1,
            spaceBetween: 24,
            pagination: {
                el: '.sector-slider .swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1280: { slidesPerView: 3 }
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            }
        });
    }

    // Countdown Timer for Upcoming Events
    const countdownDays = document.getElementById('countdown-days');
    if (countdownDays) {
        const countdownDate = new Date('2026-06-15T09:00:00').getTime();
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
