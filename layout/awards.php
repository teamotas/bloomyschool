    <style>
        .award-box {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            cursor: pointer;
        }

        .award-box img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: 0.4s;
        }

        /* overlay (desktop) */
        .award-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.65);
            color: #fff;
            padding: 16px;
            display: flex;
            align-items: flex-end;
            opacity: 0;
            transition: 0.3s;
        }

        .award-box:hover img {
            transform: scale(1.08);
        }

        .award-box:hover .award-overlay {
            opacity: 1;
        }

        .award-overlay p {
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
        }

        /* bottom content (mobile fallback) */
        .award-content {
            display: none;
            padding: 12px;
            font-size: 14px;
            line-height: 1.4;
            background: #fff;
        }

        /* MOBILE FIX */
        @media (max-width: 768px) {
            .award-overlay {
                display: none;
            }
            .award-content {
                display: block;
            }
        }
    </style>

    <section class="py-5 awards-section">
        <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Awards & Recognition</h2>
            <p class="section-subtitle">
                Celebrating proud moments and recognitions that reflect our excellence.
            </p>
            </div>

            <div class="swiper awards-swiper-slider">
            <div class="swiper-wrapper">

                <!-- Bhagyashree -->
                <div class="swiper-slide">
                    <a href="./assets/images/awards/Bhagyashree.jpeg" class="gallery-popup">
                        <div class="award-box">
                            <img src="./assets/images/awards/Bhagyashree.jpeg" alt="Bhagyashree Award">

                            <div class="award-overlay">
                                <p>
                                    Most Innovative Playschool Brand felicitated by 
                                    
                                    on 15 Dec 2024
                                </p>
                            </div>
                        </div>
                    </a>

                    <div class="award-content">
                        Most Innovative Playschool Brand felicitated by 
                        
                        on 15 Dec 2024
                    </div>
                </div>

                <!-- Bipasha Basu -->
                <div class="swiper-slide">
                    <a href="./assets/images/awards/bipasha.jpeg" class="gallery-popup">
                        <div class="award-box">
                            <img src="./assets/images/awards/bipasha.jpeg" alt="Bipasha Basu Award">

                            <div class="award-overlay">
                                <p>
                                    Excellence in Preschool Pedagogy felicitated by 
                                    
                                    on 28 Nov 2025
                                </p>
                            </div>
                        </div>
                    </a>

                    <div class="award-content">
                        Excellence in Preschool Pedagogy felicitated by 
                        
                        on 28 Nov 2025
                    </div>
                </div>

                <!-- Hema Malini -->
                <div class="swiper-slide">
                    <a href="./assets/images/awards/Hema-Malini.jpeg" class="gallery-popup">
                        <div class="award-box">
                            <img src="./assets/images/awards/Hema-Malini.jpeg" alt="Hema Malini Award">

                            <div class="award-overlay">
                                <p>
                                    The Best School for Futuristic Education in Ghaziabad,
                                    felicitated by 
                                    
                                    on 27 Jan 2024
                                </p>
                            </div>
                        </div>
                    </a>

                    <div class="award-content">
                        The Best School for Futuristic Education in Ghaziabad,
                        felicitated by 
                        
                        on 27 Jan 2024
                    </div>
                </div>

                <!-- Jaya Prada -->
                <div class="swiper-slide">
                    <a href="./assets/images/awards/Jaya-Prada.jpeg" class="gallery-popup">
                        <div class="award-box">
                            <img src="./assets/images/awards/Jaya-Prada.jpeg" alt="Jaya Prada Award">

                            <div class="award-overlay">
                                <p>
                                    Parent's Choice Award for The Best Preschool & Daycare in Ghaziabad,
                                    felicitated by 
                                    
                                    on 27 May 2023
                                </p>
                            </div>
                        </div>
                    </a>

                    <div class="award-content">
                        Parent's Choice Award for The Best Preschool & Daycare in Ghaziabad,
                        felicitated by 
                        
                        on 27 May 2023
                    </div>
                </div>

                <!-- Sharman Joshi -->
                <div class="swiper-slide">
                    <a href="./assets/images/awards/Sharman-Joshi.jpeg" class="gallery-popup">
                        <div class="award-box">
                            <img src="./assets/images/awards/Sharman-Joshi.jpeg" alt="Sharman Joshi Award">

                            <div class="award-overlay">
                                <p>
                                    Excellence Award for shaping Young Futures felicitated by 
                                    
                                    on 14 Dec 2025
                                </p>
                            </div>
                        </div>
                    </a>

                    <div class="award-content">
                        Excellence Award for shaping Young Futures felicitated by 
                        
                        on 14 Dec 2025
                    </div>
                </div>
                <!-- Tannaz Irani -->
                <div class="swiper-slide">
                    <a href="./assets/images/awards/Tannaz-Irani.jpeg" class="gallery-popup">
                        <div class="award-box">
                            <img src="./assets/images/awards/Tannaz-Irani.jpeg" alt="Tannaz Irani Award">

                            <div class="award-overlay">
                                <p>
                                    Bright Beacon Award felicitated by 
                                    
                                    on 24 Dec 2023
                                </p>
                            </div>
                        </div>
                    </a>

                    <div class="award-content">
                        Bright Beacon Award felicitated by 
                        
                        on 24 Dec 2023
                    </div>
                </div>

            </div>
            </div>

        </div>
    </section>
    <script>
        var awardsSwiper = new Swiper(".awards-swiper-slider", {
        slidesPerView: 4,
        spaceBetween: 25,
        loop: true,
        speed: 2000,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        breakpoints: {
            300: {
            slidesPerView: 1,
            },
            576: {
            slidesPerView: 2,
            },
            992: {
            slidesPerView: 3,
            },
            1200: {
            slidesPerView: 4,
            },
        }
        });
    </script>