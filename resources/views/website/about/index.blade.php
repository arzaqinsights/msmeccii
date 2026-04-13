@extends('layouts.website')

@section('title', 'About Us | MSME Chamber of Commerce and Industy of India')

@section('content')
    @include('website.about.partials.hero')
    @include('website.about.partials.who_we_are')
    @include('website.about.partials.mission_vision')
    @include('website.about.partials.core_values')
    @include('website.about.partials.leadership')

    <!-- Initialize Scripts for Animations and Icons -->
    <script>
        document.addEventListener('turbo:load', function() {
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
            
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
