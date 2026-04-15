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
        <div class="container">
            <div class="tw-mb-15">
                <span class="fw-normal tw-text-405 text-main-600 tw-mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Contact Us</span>
                <h4 class="fw-bold text-neutral-950" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Contact Us For Your Kids Day Care</h4>
            </div>
            <div class="row gy-4">
                <div class="col-lg-5">
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
                </div>
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
        <!-- <script>
            const form = document.getElementById("contactForm");

            // Inputs
            const nameEl = document.getElementById("name");
            const emailEl = document.getElementById("email");
            const phoneEl = document.getElementById("phone");
            const programEl = document.getElementById("program");
            const messageEl = document.getElementById("message");

            // Helper: show error
            function showError(input, message) {
                const small = input.parentElement.querySelector(".error");
                small.innerText = message;
                input.classList.add("input-error");
                input.classList.remove("input-success");
            }

            // Helper: show success
            function showSuccess(input) {
                const small = input.parentElement.querySelector(".error");
                if (small) small.innerText = "";
                input.classList.remove("input-error");
                input.classList.add("input-success");
            }

            // Validation functions
            function validateName() {
                let value = nameEl.value.trim();
                if (value === "") {
                    showError(nameEl, "Name is required");
                    return false;
                }
                showSuccess(nameEl);
                return true;
            }

            function validateEmail() {
                let value = emailEl.value.trim();
                let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

                if (value === "") {
                    showError(emailEl, "Email is required");
                    return false;
                } else if (!pattern.test(value)) {
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
                if (programEl.value === "") {
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

            // Blur (when leaving field)
            nameEl.addEventListener("blur", validateName);
            emailEl.addEventListener("blur", validateEmail);
            phoneEl.addEventListener("blur", validatePhone);
            programEl.addEventListener("blur", validateProgram);
            messageEl.addEventListener("blur", validateMessage);

            // Live typing (better UX)
            nameEl.addEventListener("input", validateName);
            emailEl.addEventListener("input", validateEmail);
            phoneEl.addEventListener("input", validatePhone);
            messageEl.addEventListener("input", validateMessage);
        </script> -->
</body>
</html>
