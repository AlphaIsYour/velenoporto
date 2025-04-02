<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Vite dan App CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/lenis@1.0.42/dist/lenis.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <title>{{ $title }}</title>
        
        <!-- AOS CSS dan JS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset("css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("css/kontak.css") }}">
        <link rel="stylesheet" href="{{ asset("css/slider.css") }}">
        <link rel="stylesheet" href="{{ asset("css/catch-me.css") }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
        <!-- JavaScript -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset("js/kontak.js") }}" defer></script>
        
    </head>

  <body>
    <!-- navbar -->
    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <x-hero></x-hero>

    <!-- About Section -->
    <x-about></x-about>
    
    <!-- Bagian Proyek -->
    <x-slider></x-slider>
    
    <!-- Bagian Proyek -->
    <x-proyek :projects="$projects"></x-proyek>
    
    <!-- bagian kontak -->
    <x-kontak></x-kontak>

    <!-- Catch Me Section -->
    <x-catch-me></x-catch-me>

    <!-- Testimonial Section -->
    <x-testi></x-testi>

    <!-- Footer Section -->
    <x-footer></x-footer>

    <script>
    
      document.addEventListener('DOMContentLoaded', function() {
    // Inisialisasi AOS
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: false,
        mirror: true,
        anchorPlacement: 'top-bottom',
        offset: 120,
        delay: 100
    });

    // Smooth scroll untuk navigasi
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Unified scroll handler
    let lastScrollTop = 0;
    const content = document.querySelector('.content');
    const about = document.querySelector('.footeri');
    const home = document.querySelector('.home');
    const navbar = document.querySelector("nav");
    const gambar = document.querySelector(".gambar");
    const proyek = document.querySelector(".proyek");
    const footer = document.querySelector(".footer-container");

    function handleScroll() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        const scrollProgress = currentScroll / maxScroll;

        // Footer animation
        if (about && home) {
            if (scrollProgress <= 0.5) {
                const aboutProgress = (scrollProgress * 2) * 100;
                about.style.transform = `translateY(${100 - aboutProgress}%)`;
                home.style.transform = `translateY(0)`;
            } else {
                const homeProgress = ((scrollProgress - 0.5) * 2) * 100;
                about.style.transform = `translateY(0)`;
                home.style.transform = `translateY(-${homeProgress}%)`;
            }
        }

        // Navbar dan gambar visibility
        if (proyek) {
            const proyekTop = proyek.getBoundingClientRect().top;
            if (proyekTop <= window.innerHeight) {
                gambar?.classList.add("gambar-hide");
            } else if (currentScroll < lastScrollTop) {
                gambar?.classList.remove("gambar-hide");
            }
        }

        if (footer) {
            const footerTop = footer.getBoundingClientRect().top;
            if (footerTop <= window.innerHeight) {
                navbar?.classList.add("nav-hide");
            } else if (currentScroll < lastScrollTop) {
                navbar?.classList.remove("nav-hide");
            }
        }

        lastScrollTop = currentScroll;
    }

    window.addEventListener("scroll", () => {
        requestAnimationFrame(handleScroll);
    });

    // Initial call
    handleScroll();
    });
    </script>

      @vite('resources/js/app.js')
      <script src="{{ asset("js/style.js") }}"></script>
      <script src="{{ asset('js/catch-me.js') }}"></script>
  </body>
</html>