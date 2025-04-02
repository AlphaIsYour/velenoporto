<div class="catch-me-container">
    <div class="catch-me-section">
        <div class="stars-effect"></div>
        <div class="main-text" style="text-align: left; display: flex; flex-direction: column; align-items: flex-start;">
            <h2 
            style="font-weight: 400;
            font-family: 'Unbounded', serif;
            margin-left: 5%;
            font-size: 55px;
            padding-left: 0;
            text-align: left;">EVERY LINE OF CODE <br> TELLS A STORY <br> <br></h2>
            <h2 
            style="font-weight: 200;
            font-family: 'Unbounded', serif;
            margin-left: 5%;
            font-size: 30px;
            padding-left: 0;
            text-align: left;">COME CHECK OUT MINE ON GitHub
                <span>
                    <i class="fa-brands fa-square-github" style="margin-left: 10px; font-size: 45px;"></i>
                </span></h2>
        </div>
        <div class="catch-me-button">
            <a href="https://github.com/AlphaIsYour" target="_blank">
                <span>Catch me!</span>
            </a>
        </div>
    </div>
</div>

<style>
    /* public/css/catch-me.css */
.catch-me-container {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ffffff;
    position: relative;
    z-index: 20;
}

.catch-me-section {
    width: 95%;
    height: 90%;
    border-radius: 0.5rem;
    overflow: hidden;
    background-color: black;
    position: relative;
    background-image: linear-gradient(
            to right,
            rgba(128, 128, 128, 0.297) 1px,
            #00000033 1px
        ),
        linear-gradient(
            to bottom,
            rgba(128, 128, 128, 0.258) 1px,
            #00000033 1px
        );
    background-size: 10px 10px;
}

.catch-me-button {
    position: absolute;
    padding: 4rem 6rem;
    background-color: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    border-radius: 0.5rem;
    cursor: pointer;
    z-index: 5;
    transition: transform 1.5s ease-out; /* Transisi lebih lambat */
    will-change: transform;
    pointer-events: auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.catch-me-button:hover {
    background-color: rgba(255, 255, 255, 0.3);
}

.catch-me-button span {
    color: white;
    font-weight: 600;
}

.main-text {
    position: relative;
    z-index: 1;
    color: white;
    margin-top: 50px;
}

/* Efek bintang untuk latar belakang */
.stars-effect {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
        radial-gradient(2px 2px at 20px 30px, #ffffff, rgba(0,0,0,0)),
        radial-gradient(2px 2px at 40px 70px, #ffffff, rgba(0,0,0,0)),
        radial-gradient(2px 2px at 50px 160px, #ffffff, rgba(0,0,0,0)),
        radial-gradient(2px 2px at 90px 40px, #ffffff, rgba(0,0,0,0)),
        radial-gradient(2px 2px at 130px 80px, #ffffff, rgba(0,0,0,0)),
        radial-gradient(2px 2px at 160px 120px, #ffffff, rgba(0,0,0,0));
    background-repeat: repeat;
    background-size: 200px 200px;
    animation: shine 30s linear infinite;
    opacity: 0.3;
}

@keyframes shine {
    0% {
        background-position: 0 0, 0 0, 0 0, 0 0, 0 0, 0 0;
    }
    100% {
        background-position: 550px 550px, 350px 350px, 250px 250px, 150px 150px, 450px 450px, 300px 300px;
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".catch-me-section");
    const button = document.querySelector(".catch-me-button");
    
    // Pastikan tombol awalnya terlihat
    button.style.visibility = "visible";
    
    // Variabel untuk posisi tombol
    let buttonX = section.clientWidth / 2;
    let buttonY = section.clientHeight / 2;
    
    // Flag untuk mengetahui apakah cursor berada di dalam section
    let isCursorInSection = false;
    let cursorX = 0;
    let cursorY = 0;
    
    // Perlin Noise untuk gerakan random yang smooth
    // Simple implementation of noise function
    function noise(x, y) {
        const X = Math.floor(x) & 255;
        const Y = Math.floor(y) & 255;
        return (Math.sin(X * 12.9898 + Y * 78.233) * 43758.5453) % 1;
    }
    
    // Fungsi untuk menggerakkan tombol secara random
    function moveRandomly() {
        if (!isCursorInSection) {
            const time = Date.now() * 0.001;
            const noiseX = noise(time * 0.5, 0);
            const noiseY = noise(0, time * 0.5);
            
            // Buat gerakan random pelan
            const sectionRect = section.getBoundingClientRect();
            const buttonRect = button.getBoundingClientRect();
            
            const centerX = sectionRect.width / 2;
            const centerY = sectionRect.height / 2;
            
            // Range pergerakan (jangan terlalu lebar)
            const rangeX = sectionRect.width * 0.3;
            const rangeY = sectionRect.height * 0.3;
            
            // Posisi target baru (tetap dalam batas)
            const targetX = centerX + (noiseX - 0.5) * rangeX;
            const targetY = centerY + (noiseY - 0.5) * rangeY;
            
            // Transisi lambat ke posisi baru
            buttonX = targetX;
            buttonY = targetY;
            
            // Terapkan posisi baru dengan transisi yang sudah diatur di CSS
            button.style.transform = `translate(calc(-50% + ${buttonX - centerX}px), calc(-50% + ${buttonY - centerY}px))`;
        }
    }
    
    // Fungsi untuk menggerakkan tombol menuju cursor
    function moveTowardsCursor() {
        if (isCursorInSection) {
            const sectionRect = section.getBoundingClientRect();
            const buttonRect = button.getBoundingClientRect();
            
            // Hitung posisi relatif cursor dalam section
            const relativeX = cursorX - sectionRect.left;
            const relativeY = cursorY - sectionRect.top;
            
            const centerX = sectionRect.width / 2;
            const centerY = sectionRect.height / 2;
            
            // Hitung posisi target (sekarang MENDEKATI cursor)
            buttonX = relativeX;
            buttonY = relativeY;
            
            // Batasi posisi agar tetap dalam section
            const maxX = sectionRect.width - buttonRect.width / 2;
            const maxY = sectionRect.height - buttonRect.height / 2;
            const minX = buttonRect.width / 2;
            const minY = buttonRect.height / 2;
            
            buttonX = Math.max(minX, Math.min(buttonX, maxX));
            buttonY = Math.max(minY, Math.min(buttonY, maxY));
            
            // Terapkan posisi baru dengan transisi lambat (diatur di CSS)
            button.style.transform = `translate(calc(-50% + ${buttonX - centerX}px), calc(-50% + ${buttonY - centerY}px))`;
        }
    }
    
    // Event listener untuk mouseenter dan mouseleave
    section.addEventListener("mouseenter", function() {
        isCursorInSection = true;
    });
    
    section.addEventListener("mouseleave", function() {
        isCursorInSection = false;
    });
    
    // Event listener untuk mouse move
    section.addEventListener("mousemove", function(e) {
        cursorX = e.clientX;
        cursorY = e.clientY;
        moveTowardsCursor();
    });
    
    // Jalankan gerakan random saat tidak ada hover
    setInterval(function() {
        if (!isCursorInSection) {
            moveRandomly();
        }
    }, 2000); // Update gerakan random setiap 2 detik
    
    // Initial position
    moveRandomly();
});
</script>