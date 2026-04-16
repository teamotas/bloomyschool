<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $metaDescription = "Learn about Bloomy Preschool, our mission, vision, and commitment to early childhood education.";

        $metaKeywords = "about preschool, kids school, daycare center, early education";

        include('./layout/head.php');
    ?>
    <!-- Title -->
    <title>Bloomy Preschool - Preschool & Kindergarten </title>

    <?php include('./layout/link-css.php') ?>

</head>

<body>
    <?php include('./layout/scroll-over-preload.php') ?>

    <?php include('./layout/mobile-menu.php') ?>

    <?php include('./layout/search-box.php') ?>

    <?php include('./layout/header-top.php'); ?>

    <?php include('./layout/header.php'); ?>


    <?php
        $title = "Contact Us";

        $breadcrumbs = [
            ['label' => 'Home', 'link' => 'index.php'],
            ['label' => 'Contact Us', 'link' => null]
        ];

        include './layout/breadcrumb.php';
    ?>
    <!-- =========================== contact us section start =========================== -->
    <section class="py-110">
        <style>
            .branch-card {
                position: relative;
                background: linear-gradient(145deg, #ffffff, #fff8e6);
                border-radius: 18px;
                overflow: hidden;
                transition: all 0.35s ease;
                border: 1px solid rgba(0,0,0,0.05);
            }

            /* Glow border effect */
            .branch-card::before {
                content: "";
                position: absolute;
                inset: 0;
                border-radius: inherit;
                padding: 1px;
                background: linear-gradient(120deg, #F9B001, #FC4525, #ff9f43);
                -webkit-mask: 
                    linear-gradient(#fff 0 0) content-box, 
                    linear-gradient(#fff 0 0);
                -webkit-mask-composite: xor;
                mask-composite: exclude;
                opacity: 0.4;
                transition: 0.4s;
            }

            /* Inner glow */
            .branch-card::after {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(255,176,1,0.15), transparent 60%);
                opacity: 0;
                transition: 0.5s;
            }

            /* Hover effects */
            .branch-card:hover {
                transform: translateY(-10px) scale(1.01);
                box-shadow: 0 25px 50px rgba(0,0,0,0.12);
            }

            .branch-card:hover::before {
                opacity: 1;
            }

            .branch-card:hover::after {
                opacity: 1;
            }

            /* Typography polish */
            .branch-card h5 {
                letter-spacing: 0.3px;
            }

            .branch-card p {
                font-size: 14.5px;
                line-height: 1.6;
            }

            .social-icons a {
                width: 42px;
                height: 42px;
                border-radius: 12px;
                background: linear-gradient(135deg, #f5f5f5, #ffffff);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #444;
                font-size: 15px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            /* Glow ripple (like your button flair) */
            .social-icons a::before {
                content: "";
                position: absolute;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(255,176,1,0.4), transparent 60%);
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%) scale(0);
                transition: 0.4s ease;
            }

            .social-icons a:hover::before {
                transform: translate(-50%, -50%) scale(1);
            }

            .social-icons a:hover {
                color: #fff;
                background: linear-gradient(135deg, #F9B001, #FC4525);
                transform: translateY(-4px);
            }
            .branch-card::before,
            .branch-card::after {
                pointer-events: none;
            }
        </style>
        <div class="container tw-mb-15">
            <div class="">
                <span class="fw-normal tw-text-505 text-main-600 tw-mb-0" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Our Branches</span>
                <h3 class="fw-bold h7">Visit Our Locations</h3>
                <p class="text-muted tw-mb-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    We are available at multiple locations to serve you better</p>
            </div>
            <div class="row gy-4">

                <!-- Branch 1 -->
                <div class="col-lg-6">
                    <div class="branch-card p-4 border rounded-3 shadow-sm h-100">

                        <h5 class="fw-bold text-main-600 mb-3">
                            <i class="fa-solid fa-location-dot me-2"></i> Sahibabad Branch
                        </h5>

                        <p class="mb-2">
                            <i class="fa-solid fa-tty me-2"></i> 0120-4160100
                        </p>

                        <p class="mb-2">
                            <i class="fa-solid fa-phone me-2 text-success"></i>
                            <a href="tel:+919810183523">98101 83523</a> /
                            <a href="tel:+919810865370">98108 65370</a>
                        </p>

                        <p class="mb-3">
                            <i class="fa-solid fa-envelope me-2 text-danger"></i>
                            <a href="mailto:sahibabad@bloomyschools.com">
                                sahibabad@bloomyschools.com
                            </a>
                        </p>

                        <p class="text-muted mb-3">
                            <i class="fa-solid fa-map me-2"></i>
                            2/100 Sector-2 Rajendra Nagar, Opp. Ekta Park, Near SM World,<br>
                            Sahibabad, Ghaziabad - 201005
                        </p>
                        
                        <div class="d-flex gap-3 flex-wrap social-icons">
                            
                            <a href="https://www.bloomyschools.com" target="_blank" title="Website">
                                <i class="fa-solid fa-globe"></i>
                            </a>

                            <a href="https://www.facebook.com/bloomyschools/" target="_blank" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="https://www.instagram.com/bloomyschools" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="https://youtube.com/@bloomyschools" target="_blank" title="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>

                            <a href="https://x.com/bloomyschools" target="_blank" title="Twitter">
                                <i class="fab fa-x-twitter"></i>
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Branch 2 -->
                <div class="col-lg-6">
                    <div class="branch-card p-4 border rounded-3 shadow-sm h-100">

                        <h5 class="fw-bold text-main-600 mb-3">
                            <i class="fa-solid fa-location-dot me-2"></i> Rajendra Nagar Branch
                        </h5>

                        <p class="mb-2">
                            <i class="fa-solid fa-tty me-2"></i> 0120-4112094
                        </p>

                        <p class="mb-2">
                            <i class="fa-solid fa-phone me-2 text-success"></i>
                            <a href="tel:+919311666157">93116 66157</a> /
                            <a href="tel:+918595059818">85950 59818</a>
                        </p>

                        <p class="mb-3">
                            <i class="fa-solid fa-envelope me-2 text-danger"></i>
                            <a href="mailto:rajendranagar@bloomyschools.com">
                                rajendranagar@bloomyschools.com
                            </a>
                        </p>

                        <p class="text-muted mb-3">
                            <i class="fa-solid fa-map me-2"></i>
                            3/36 Sector-5 Rajendra Nagar, Near Mother Dairy Booth,<br>
                            Sahibabad, Ghaziabad - 201005
                        </p>

                        <div class="d-flex gap-3 flex-wrap social-icons">
                            
                            <a href="https://www.bloomyschools.com" target="_blank">
                                <i class="fa-solid fa-globe"></i>
                            </a>

                            <a href="https://www.facebook.com/bloomyschools.rajendranagar" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="https://www.instagram.com/bloomyschools.rajendranagar" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="https://youtube.com/@bloomyschools.rajendranagar" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>

                            <a href="https://x.com/bloomy_rajendra" target="_blank">
                                <i class="fab fa-x-twitter"></i>
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="container tw-mt-50 ms-auto me-auto">
            <div class="tw-mb-15">
                <span class="fw-normal tw-text-505 text-main-600 tw-mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Contact Us</span>
                <h4 class="fw-bold text-neutral-950 h7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Contact Us For Your Kids Day Care</h4>
            </div>
            <div class="row gy-4">
                <!-- <div class="col-lg-5">
                    <div class="d-flex align-items-center tw-gap-3 tw-mb-10" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <span class="tw-w-15 tw-h-15 bg-main-600 text-white d-flex align-items-center justify-content-center rounded-circle tw-text-7">
                            <i class="ph-fill ph-phone"></i>
                        </span>
                        <div>
                            <span class="fw-medium tw-text-4 text-paragraph-500 tw-mb-1 d-block">Call Us 7/24</span>
                            <h5>
                                <a href="tel:+91 98101 83523 " class="fw-semibold text-neutral-950"> 
                                    +91 98101 83523 
                                </a>
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center tw-gap-3 tw-mb-10" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <span class="tw-w-15 tw-h-15 bg-pink-600 text-white d-flex align-items-center justify-content-center rounded-circle tw-text-7">
                            <i class="ph-fill ph-map-pin-area"></i>
                        </span>
                        <div>
                            <span class="fw-medium tw-text-4 text-paragraph-500 tw-mb-1 d-block">Location</span>
                            <h5 class="fw-semibold text-neutral-950">
                                2/100, Block-2, Sector-2, Rajendra Nagar, <br/> Sahibabad, Ghaziabad, Uttar Pradesh 201005
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center tw-gap-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <span class="tw-w-15 tw-h-15 bg-main-two-600 text-white d-flex align-items-center justify-content-center rounded-circle tw-text-7">
                            <i class="ph-bold ph-envelope"></i>
                        </span>
                        <div>
                            <span class="fw-medium tw-text-4 text-paragraph-500 tw-mb-1 d-block">Make a Quote</span>
                            <h5>
                                <a href="mailto:info@bloomyschools.com" class="fw-semibold text-neutral-950">
                                    info@bloomyschools.com
                                </a>
                            </h5>
                        </div>
                    </div>
                </div> -->
                
                <div class="col-lg-7">
                    <!-- <form action="contact-form.php" method="POST"> -->
                    <form id="contactForm" action="contact-form.php" method="POST">
                        
                        <?php if (isset($_GET['error'])): ?>
                            <div class="alert alert-danger">
                                <?= htmlspecialchars($_GET['error']) ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_GET['success'])): ?>
                            <div class="alert alert-success">
                                Enquiry submitted successfully!
                            </div>
                        <?php endif; ?>

                        <div class="row gy-4">
                            <div class="col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                                <input type="text" class="tw-py-3 tw-px-5 bg-main-two-50 border-neutral-100 border tw-rounded-md fw-normal tw-text-4 text-neutral-600 w-100 focus-visible-border-main-600" placeholder="Name" name="name" id="name">
                                <small class="error text-danger"></small>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                                <input type="email" class="tw-py-3 tw-px-5 bg-main-two-50 border-neutral-100 border tw-rounded-md fw-normal tw-text-4 text-neutral-600 w-100 focus-visible-border-main-600" placeholder="Email" name="email" id="email">
                                <small class="error text-danger"></small>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                                <input type="number" class="tw-py-3 tw-px-5 bg-main-two-50 border-neutral-100 border tw-rounded-md fw-normal tw-text-4 text-neutral-600 w-100 focus-visible-border-main-600" placeholder="Phone" name="phone" id="phone">
                                <small class="error text-danger"></small>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                                <select name="program" id="program"
                                    class="tw-py-3 tw-px-5 bg-main-two-50 border-neutral-100 border tw-rounded-md fw-normal tw-text-4 text-neutral-600 w-100 focus-visible-border-main-600" >

                                    <option value="">Select Program</option>

                                    <option value="toddlers">Toddlers Program</option>
                                    <option value="playgroup">Play Group Program</option>
                                    <option value="nursery">Nursery Program</option>
                                    <option value="junior-kg">Junior KG</option>
                                    <option value="senior-kg">Senior KG</option>
                                    <option value="daycare">Day Care</option>

                                </select>
                                <small class="error text-danger"></small>
                            </div>
                            <div class="col-sm-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                                <textarea class="tw-py-3 tw-px-5 bg-main-two-50 border-neutral-100 border tw-rounded-md fw-normal tw-text-4 text-neutral-600 w-100 focus-visible-border-main-600 tw-h-170-px" placeholder="Your message" name="message" id="message"></textarea>
                            </div>
                        </div>
                        <button type="submit" class=" g-recaptcha btn btn-main-two hover-style-two button--stroke active-scale-094 tw-duration-100 tw-border-bottom-main-two-600 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4 tw-mt-5" data-block="button" data-aos="fade-up" data-aos-duration="800" data-aos-delay="350"
                            data-sitekey="6LdlEf0rAAAAAE3VLb3ipKPgJmc8pjs_DjgyKN_W"
                            data-callback="onSubmit"
                            data-action="submit"    
                        >
                            <span class="button__flair"></span>
                            <span class="button__label">Send Your Message</span>
                            <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                                <img src="./assets/images/icon/banner-icon-white.png" alt="icon">
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
    <!-- =========================== contact us section end =========================== -->

    <!-- ==================== contact us bottom start ============================ -->
    <!-- ======================== map section start ======================== -->
    <!-- Google Map start -->
        <div class="tw-h-500-px">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.0613591637875!2d77.34397237529126!3d28.68781107563455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfbeb7bdc2a6b%3A0x1e62a81e43dbec0e!2sBloomy%20Preschool%20%7C%20Daycare%20%26%20Activity%20Center!5e0!3m2!1sen!2sin!4v1774988390275!5m2!1sen!2sin"
                class="w-100 h-100"></iframe>
            
        </div>
        <!-- Google Map end -->
    <!-- ======================== map section end ======================== -->
    <!-- ==================== contact us bottom end ============================ -->

    <?php include('./layout/newsletter.php') ?>

    <?php include('./layout/footer-1.php') ?>

    <?php include('./layout/link-js.php') ?>

        <script>
        const form = document.getElementById("contactForm");

        // Inputs
        const nameEl = document.getElementById("name");
        const emailEl = document.getElementById("email");
        const phoneEl = document.getElementById("phone");
        const programEl = document.getElementById("program");
        const messageEl = document.getElementById("message");

        // Prevent multiple submits
        let isSubmitting = false;

        // ===== Helpers =====
        function showError(input, message) {
            const small = input.parentElement.querySelector(".error");
            if (small) small.innerText = message;
            input.classList.add("input-error");
            input.classList.remove("input-success");
        }

        function showSuccess(input) {
            const small = input.parentElement.querySelector(".error");
            if (small) small.innerText = "";
            input.classList.remove("input-error");
            input.classList.add("input-success");
        }

        // ===== Validations =====
        function validateName() {
            let value = nameEl.value.trim();
            if (!value) {
                showError(nameEl, "Name is required");
                return false;
            }
            showSuccess(nameEl);
            return true;
        }

        function validateEmail() {
            let value = emailEl.value.trim();
            let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,}$/;

            if (!value) {
                showError(emailEl, "Email is required");
                return false;
            }
            if (!pattern.test(value)) {
                showError(emailEl, "Invalid email");
                return false;
            }

            showSuccess(emailEl);
            return true;
        }

        function validatePhone() {
            let value = phoneEl.value.trim();
            let pattern = /^[6-9]\d{9}$/;

            if (!pattern.test(value)) {
                showError(phoneEl, "Enter valid 10-digit phone");
                return false;
            }

            showSuccess(phoneEl);
            return true;
        }

        function validateProgram() {
            if (!programEl.value) {
                showError(programEl, "Select a program");
                return false;
            }

            showSuccess(programEl);
            return true;
        }

        function validateMessage() {
            let value = messageEl.value.trim();

            if (value.length < 10) {
                showError(messageEl, "Minimum 10 characters required");
                return false;
            }

            showSuccess(messageEl);
            return true;
        }

        function validateAll() {
            return (
                validateName() &&
                validateEmail() &&
                validatePhone() &&
                validateProgram() &&
                validateMessage()
            );
        }

        // ===== EVENTS =====
        nameEl.addEventListener("input", validateName);
        emailEl.addEventListener("input", validateEmail);
        phoneEl.addEventListener("input", validatePhone);
        messageEl.addEventListener("input", validateMessage);

        // ===== RECAPTCHA CALLBACK =====
        function onSubmit(token) {
            if (!isSubmitting) {
                isSubmitting = true;
                form.submit();
            }
        }

        // ===== FORM SUBMIT =====
        form.addEventListener("submit", function (e) {
            if (!validateAll()) {
                e.preventDefault();
                return;
            }

            e.preventDefault();

            if (!isSubmitting) {
                grecaptcha.execute();
            }
        });
        </script>
</body>
</html>
