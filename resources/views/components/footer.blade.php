<div class="footer-container">
    <div class="footer">
        <section class="section home"></section>
        <section class="section footeri ">
            <div class="futa">
                <div class="b b1">
                    <div class="bnama">
                        <img class="blogo" src="{{ asset('svg/3.svg') }}" alt="">
                    </div>
                </div>
                <div class="middle">
                    <div class="b b2">
                        <div class="bdua">
                            <div class="mt-20">
                                <p class="text-black text-2xl">Made with love in <span class="font-medium">Malang, Indonesia.</span></p>
                            </div>
                            
                            <!-- Local Time -->
                            <div class="mb-12">
                                <p class="text-gray-500 font-medium" style="font-size:43px;">Local time - <span id="localTime" class="font-medium text-black"></span></p>
                            </div>
                            <p class="text-xs">© 2025 Youralpha. All Rights Reserved.</p>           
                        </div>
                    </div>
                    <div class="b b3">
                        <div class="link-row">
                            <a href="https://youtube.com/@alphaisyour" class="hover-link" id="youtube-link">
                                <p>YouTube</p>
                                <svg class="arrow-outward" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16 16V7.9L7.9 16L6.5 14.5L14.6 6.5H7V4.5H18.5V16H16Z"/>
                                </svg>
                            </a>
                            <a href="https://instagram.com/eno4lph_" class="hover-link" id="instagram-link">
                                <p>Instagram</p>
                                <svg class="arrow-outward" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16 16V7.9L7.9 16L6.5 14.5L14.6 6.5H7V4.5H18.5V16H16Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="link-row">
                            <a href="https://twitter.com/@alphaisyour" class="hover-link" id="twitter-link">
                                <p>Twitter</p>
                                <svg class="arrow-outward" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16 16V7.9L7.9 16L6.5 14.5L14.6 6.5H7V4.5H18.5V16H16Z"/>
                                </svg>
                            </a>
                            <a href="/login" class="hover-link" id="login-link">
                                @auth
                                <p>Dashboard</p>
                                @else
                                <p>Login</p>
                                @endauth
                                <svg class="arrow-outward" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16 16V7.9L7.9 16L6.5 14.5L14.6 6.5H7V4.5H18.5V16H16Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="b b4"></div>
            </div>
        </section>
        
        <script>
            function updateLocalTime() {
                const now = new Date();
                const timeString = now.toLocaleTimeString('en-US', { 
                    hour: 'numeric',
                    minute: '2-digit',
                    hour12: true 
                });
                document.getElementById('localTime').textContent = timeString;
            }
            
            updateLocalTime();
            setInterval(updateLocalTime, 60000);
        </script>
    </div>
</div>

<style>
        .footer-container {
            height: 100vh;
            width: 100%;
        }

        .footer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .section {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5vw;
            will-change: transform;
        }

        .home {
            background: #ffffff00;
            color: white;
            z-index: 3;
        }
        .footeri {
            background: #f5f5f5;
            color: rgb(0, 0, 0);
            z-index: 1;
            display: flex;
            flex-direction: column;
            /* padding: 2rem; */
            text-align: center;
        }

        .futa {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100vh;
        }
        .b {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .bnama {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            border-radius: 10px;
            width: 60%;
            height: 80%;
            padding: 20px
        }

        .blogo {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .b1 {
            height: 40vh;
            width: 100%;
            background-color: rgb(255, 255, 255);
            font-size: 2rem;
            font-weight: bold;
        }
        .middle {
            display: flex;
            height: 50vh;
            width: 100%;
        }

        .b2 {
            display: flex;
            background-color: rgb(255, 255, 255);
            font-size: 1.2rem;
            width: 50%;
            height: 100%;
            padding-left: 50px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .bdua {
            width: 80%;
            height: 80%;
            text-align: left;
        }

        .b3 {
            height: 100%;
            width: 50%;
            background-color: rgb(255, 255, 255);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px 100px 20px 20px;
            gap: 20px;
        }

        .link-row {
            display: flex;
            gap: 20px;
            width: 100%;
            justify-content: center;
            background-color: #fff;
        }

        /* Direct rules for the hover links - simplified for clarity */
        .hover-link {
            padding: 15px 15px;
            height: 80px;
            border: 1px solid #000;
            border-radius: 5px;
            text-decoration: none;
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            font-style: normal;
            text-transform: uppercase;
            font-size: 20px;
            color: black;
            background-color: white;
            text-align: center;
            width: 60%;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.4s ease;
            z-index: 1;
            gap: 15px;
        }

        .hover-link:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: -1;
            transition: transform 0.8s;
            transform-origin: 0 0;
            transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
            transform: scaleY(0);
            border-radius: 4px;
        }

        .hover-link:hover {
            color: #fff !important;
            gap: 4px;
        }

        .hover-link:hover:before {
            transform: scaleY(1);
        }

        .hover-link p {
            transition: all 0.5s ease;
        }

        .hover-link:hover p {
            transform: translateX(25px);
        }

        .hover-link .arrow-outward {
            width: 18px;
            height: 18px;
            transition: all 0.5s ease;
            fill: #000;
        }

        .hover-link:hover .arrow-outward {
            transform: translateX(-25px);
            fill: #fff;
        }

        .b4 {
            height: 10vh;
            width: 100%;
            background-color: rgb(255, 255, 255);
        }
</style>

<!-- Additional JavaScript to ensure the hover effects work -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all the hover links
    const hoverLinks = document.querySelectorAll('.hover-link');
    
    // Add event listeners to each link
    hoverLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.color = '#fff';
            const arrow = this.querySelector('.arrow-outward');
            if (arrow) {
                arrow.style.fill = '#fff';
                arrow.style.transform = 'translateX(-25px)';
            }
            const p = this.querySelector('p');
            if (p) {
                p.style.transform = 'translateX(25px)';
            }
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.color = '#000';
            const arrow = this.querySelector('.arrow-outward');
            if (arrow) {
                arrow.style.fill = '#000';
                arrow.style.transform = 'none';
            }
            const p = this.querySelector('p');
            if (p) {
                p.style.transform = 'none';
            }
        });
    });
});
</script>