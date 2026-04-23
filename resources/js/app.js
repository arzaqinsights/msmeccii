import './bootstrap';
import "@hotwired/turbo";
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import collapse from '@alpinejs/collapse';

// Register Alpine plugins immediately
Alpine.plugin(intersect);
Alpine.plugin(collapse);

// Make Alpine available globally
window.Alpine = Alpine;
console.log('MSMECCII App JS v1.3 loaded - Alpine Collapse registered EARLY');

// Start Alpine
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

    // Performance: Native Lazy Loading for all images except the first few
    const images = document.querySelectorAll('img:not([loading])');
    images.forEach((img, index) => {
        if (index > 3) { // Skip first 4 images to prioritize above-the-fold content
            img.setAttribute('loading', 'lazy');
        }
    });

    // Performance: Smooth Reveal for images
    function revealImage(img) {
        if (img.complete) {
            img.classList.remove('opacity-0');
            return;
        }
        img.classList.add('opacity-0', 'transition-opacity', 'duration-500');
        img.addEventListener('load', () => {
            img.classList.remove('opacity-0');
        }, { once: true });
        img.addEventListener('error', () => {
            img.classList.remove('opacity-0');
        }, { once: true });
        
        // Fallback for weird browser behavior (safety)
        setTimeout(() => img.classList.remove('opacity-0'), 3000);
    }

    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    lazyImages.forEach(revealImage);

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
