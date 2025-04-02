document.addEventListener("DOMContentLoaded", () => {
    const boxes = document.querySelectorAll(
        ".box1, .box2, .box3, .box4, .box5"
    );

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Add animation class
                    entry.target.classList.add("fill-animation");
                } else {
                    // Reset animation when out of view
                    entry.target.classList.remove("fill-animation");
                }
            });
        },
        {
            threshold: 0.3, // Trigger when 30% of element is visible
        }
    );

    boxes.forEach((box) => observer.observe(box));
});
