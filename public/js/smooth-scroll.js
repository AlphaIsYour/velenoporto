document.addEventListener("DOMContentLoaded", () => {
    // Create Lenis instance with debug mode to help troubleshoot
    const lenis = new Lenis({
        duration: 2.2,
        easing: (t) => 1 - Math.pow(1 - t, 5),
        orientation: "vertical",
        gestureOrientation: "vertical",
        smoothWheel: true,
        wheelMultiplier: 0.85,
        smoothTouch: true,
        touchMultiplier: 1.5,
        infinite: false,
    });

    // Add this to help debug
    lenis.on("scroll", ({ scroll, limit, velocity, direction, progress }) => {
        console.log({ scroll, limit, velocity, direction, progress });
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    // Start the animation frame loop
    requestAnimationFrame(raf);

    // Get our elements outside the scroll handler for better performance
    const about = document.querySelector(".footeri");
    const home = document.querySelector(".home");
    const navbar = document.querySelector("nav");
    const gambar = document.querySelector(".gambar");
    const proyek = document.querySelector(".proyek");
    const footer = document.querySelector(".footer-container");

    // Add scroll event listener for element animations
    lenis.on("scroll", ({ scroll, velocity, direction, progress }) => {
        // Footer animation
        if (about && home) {
            if (progress <= 0.5) {
                const aboutProgress = progress * 2 * 100;
                about.style.transform = `translateY(${100 - aboutProgress}%)`;
                home.style.transform = `translateY(0)`;
            } else {
                const homeProgress = (progress - 0.5) * 2 * 100;
                about.style.transform = `translateY(0)`;
                home.style.transform = `translateY(-${homeProgress}%)`;
            }
        }

        // Proyek section visibility
        if (proyek) {
            const proyekRect = proyek.getBoundingClientRect();
            if (proyekRect.top <= window.innerHeight) {
                gambar?.classList.add("gambar-hide");
            } else if (direction === 1) {
                gambar?.classList.remove("gambar-hide");
            }
        }

        // Footer visibility
        if (footer) {
            const footerRect = footer.getBoundingClientRect();
            if (footerRect.top <= window.innerHeight) {
                navbar?.classList.add("nav-hide");
            } else if (direction === 1) {
                navbar?.classList.remove("nav-hide");
            }
        }
    });

    // Handle anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", (e) => {
            e.preventDefault();
            const target = document.querySelector(anchor.getAttribute("href"));
            if (target) {
                lenis.scrollTo(target, {
                    offset: -100,
                    duration: 2.0,
                    easing: (t) => 1 - Math.pow(1 - t, 5),
                });
            }
        });
    });
});
