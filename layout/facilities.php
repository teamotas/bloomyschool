    <style>
        /* SECTION */
        .facilities-modern {
        background: #fff;
        }

        /* ITEM */
        .facility-item {
        text-align: center;
        }

        /* CIRCLE */
        .circle {
        width: 110px;
        height: 110px;
        margin: 0 auto 15px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: floatY 3s ease-in-out infinite;
        transition: 0.3s;
        }

        /* ICON */
        .circle i {
        font-size: 34px;
        color: #fff;
        }

        /* HOVER BOOST */
        .circle:hover {
        transform: scale(1.1);
        }

        /* 🔥 GRADIENT COLORS */
        .gradient-1 { background: linear-gradient(135deg, #f6a623, #fdd76e); }
        .gradient-2 { background: linear-gradient(135deg, #5f748f, #8fa3bf); }
        .gradient-3 { background: linear-gradient(135deg, #f04d2c, #ff7a59); }
        .gradient-4 { background: linear-gradient(135deg, #2f7edb, #5aa6ff); }
        .gradient-5 { background: linear-gradient(135deg, #7ac142, #a8e063); }
        .gradient-6 { background: linear-gradient(135deg, #2fa4a0, #5fd0cc); }

        /* TEXT */
        .facility-item h6 {
        font-weight: 700;
        font-size: 16px;
        color: var(--neutral-800);
        }

        /* 🔥 BOUNCY FLOAT ANIMATION */
        @keyframes floatY {
        0%   { transform: translateY(0px); }
        50%  { transform: translateY(-8px); }
        100% { transform: translateY(0px); }
        }
    </style>
    <section class="py-5 facilities-modern text-center">
    <div class="container">

        <!-- Title -->
        <p class=" mb-2 fw-normal tw-text-505" data-aos="fade-up">
        Our Facilities
        </p>

        <h2 class="main-title mb-5 h7" data-aos="fade-up" data-aos-delay="100">
        We create a safe and joyful space for every child
        </h2>

        <div class="row justify-content-center g-4">

        <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="facility-item">
            <div class="circle gradient-1">
                <i class="fa-solid fa-children"></i>
            </div>
            <h6>Activity Room</h6>
            </div>
        </div>

        <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="facility-item">
            <div class="circle gradient-2">
                <i class="fa-solid fa-puzzle-piece"></i>
            </div>
            <h6>Play To Learn</h6>
            </div>
        </div>

        <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="facility-item">
            <div class="circle gradient-3">
                <i class="fa-solid fa-award"></i>
            </div>
            <h6>Quality Educators</h6>
            </div>
        </div>

        <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="facility-item">
            <div class="circle gradient-4">
                <i class="fa-solid fa-utensils"></i>
            </div>
            <h6>Hygienic Food</h6>
            </div>
        </div>

        <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="facility-item">
            <div class="circle gradient-5">
                <i class="fa-solid fa-house"></i>
            </div>
            <h6>Home-like Environment</h6>
            </div>
        </div>

        <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="facility-item">
            <div class="circle gradient-6">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h6>Safety & Security</h6>
            </div>
        </div>

        </div>
    </div>
    </section>