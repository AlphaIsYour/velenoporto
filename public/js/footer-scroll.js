// const content = document.querySelector(".scroll-container");
// const about = document.querySelector(".catch-me-container");
// const home = document.querySelector(".footer-container");

const content = document.querySelector(".contente");
const about = document.querySelector(".aboute");
const home = document.querySelector(".homee");
// Fungsi untuk update posisi sections berdasarkan scroll
function updateSections() {
    const scrolled = window.pageYOffset;
    const maxScroll =
        document.documentElement.scrollHeight - window.innerHeight;

    // Kalkulasi progress scroll (0 to 1)
    const scrollProgress = scrolled / maxScroll;

    // Transform about section
    if (scrollProgress <= 0.5) {
        // First half of scroll moves about section
        const aboutProgress = scrollProgress * 2 * 100;
        about.style.transform = `translateY(${100 - aboutProgress}%)`;
        home.style.transform = `translateY(0)`;
    } else {
        // Second half of scroll moves home section
        const homeProgress = (scrollProgress - 0.5) * 2 * 100;
        about.style.transform = `translateY(0)`;
        home.style.transform = `translateY(-${homeProgress}%)`;
    }
}

// Listen untuk scroll events
window.addEventListener("scroll", () => {
    requestAnimationFrame(updateSections);
});
