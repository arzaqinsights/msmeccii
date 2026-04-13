@extends('layouts.website')
@section('title', 'Welcome to MSME Chamber of Commerce and Industy of India')
@section('content')
    @include('website.home.partials.hero')
    @include('website.home.partials.events')
    @include('website.home.partials.about')
    @include('website.home.partials.services')
    @include('website.home.partials.sectors')
    @include('website.home.partials.announcements')
    @include('website.home.partials.chairman')

    <!-- Initialize Scripts -->
    <script>
        document.addEventListener('turbo:load', function() {
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
            
            // Simple Animation Observer Helper
            const animateEls = document.querySelectorAll('.animate-on-scroll');
            if (animateEls.length > 0) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1 });
                
                animateEls.forEach(el => observer.observe(el));
            }
        });
    </script>
@endsection