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
        $title = "Apply For Admission";

        $breadcrumbs = [
            ['label' => 'Home', 'link' => 'index.php'],
            ['label' => 'Apply For Admission', 'link' => null]
        ];

        include './layout/breadcrumb.php';
    ?>

    <section class="py-110">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="tw-mb-12">
                        <span class="fw-normal tw-text-505 text-main-600 tw-mb-6">
                            Admission Open 2026-27
                        </span>
                        <h4 class="fw-bold text-neutral-950 tw-mb-4 h7">
                            Apply for Your Child’s Bright Future
                        </h4>
                        <!-- <p class="fw-normal tw-text-4 text-paragraph-500">
                            Enroll your child in a safe, nurturing, and engaging learning environment. Our programs are designed to build strong foundations through fun-based learning, creativity, and care.
                        </p> -->
                    </div>
                    <form id="admissionForm" action="admission-form.php" method="POST">

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

                            <!-- Name -->
                            <div class="col-sm-6">
                                <input type="text" name="name" id="name"
                                    placeholder="Full Name"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                            <!-- Phone -->
                            <div class="col-sm-6">
                                <input type="text" name="phone" id="phone"
                                    placeholder="Phone Number"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                            <!-- Email -->
                            <div class="col-sm-6">
                                <input type="email" name="email" id="email"
                                    placeholder="Email Address"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                            <!-- Select Program -->
                            <div class="col-sm-6">
                                <select name="program" id="program"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
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

                            <!-- Message -->
                            <div class="col-12">
                                <textarea name="message" id="message" rows="4"
                                    placeholder="Your Message"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600"></textarea>
                                <small class="error text-danger"></small>
                            </div>

                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="btn btn-main-two hover-style-two button--stroke active-scale-094 tw-duration-100 tw-border-bottom-main-two-600 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4 tw-mt-5 g-recaptcha "
                            data-sitekey="6LfaGAEsAAAAAAK03v_nZRy74ZouoW7HKLFK39nW"
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
                <div class="col-lg-6">
                    <span class="w-100">
                        <img src="./assets/images/index/apply-asmission-img.png" alt="img" class="w-100">
                    </span>
                </div>
            </div>
        </div>
    </section>

    <?php include('./layout/our-program.php') ?>

    <?php include('./layout/why-choose-index.php') ?>

    <?php include('./layout/awards.php')?>
    <?php include('./layout/facilities.php') ?>

    <?php include('./layout/testimonial-index.php') ?>

    <?php include('./layout/our-program.php') ?>

    <?php include('./layout/why-choose-index.php') ?>

    <?php include('./layout/awards.php')?>
    <?php include('./layout/facilities.php') ?>

    <?php include('./layout/testimonial-index.php') ?>

    <?php include('./layout/newsletter.php') ?>

    <?php include('./layout/footer-1.php') ?>

    <?php include('./layout/link-js.php') ?>
<script>

    const form = document.getElementById("admissionForm");

    // Inputs
    const nameEl = document.getElementById("name");
    const emailEl = document.getElementById("email");
    const phoneEl = document.getElementById("phone");
    const programEl = document.getElementById("program");

    let isSubmitting = false;


    // =====================================
    // HELPERS
    // =====================================
    function showError(input, message) {

        const small = input.parentElement.querySelector(".error");

        if (small) {
            small.innerText = message;
        }
    }

    function showSuccess(input) {

        const small = input.parentElement.querySelector(".error");

        if (small) {
            small.innerText = "";
        }
    }


    // =====================================
    // VALIDATIONS
    // =====================================
    function validateName() {

        if (!nameEl.value.trim()) {

            showError(nameEl, "Name is required");

            return false;
        }

        showSuccess(nameEl);

        return true;
    }


    function validateEmail() {

        const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailEl.value.trim()) {

            showError(emailEl, "Email is required");

            return false;
        }

        if (!pattern.test(emailEl.value.trim())) {

            showError(emailEl, "Invalid email");

            return false;
        }

        showSuccess(emailEl);

        return true;
    }


    function validatePhone() {

        const pattern = /^[6-9]\d{9}$/;

        if (!pattern.test(phoneEl.value.trim())) {

            showError(phoneEl, "Invalid phone number");

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


    function validateAll() {

        return (
            validateName() &&
            validateEmail() &&
            validatePhone() &&
            validateProgram()
        );
    }


    // =====================================
    // LIVE VALIDATION
    // =====================================
    nameEl.addEventListener("input", validateName);

    emailEl.addEventListener("input", validateEmail);

    phoneEl.addEventListener("input", validatePhone);

    programEl.addEventListener("change", validateProgram);


    // =====================================
    // RECAPTCHA CALLBACK
    // =====================================
    function onSubmit(token) {

        if (!isSubmitting) {

            isSubmitting = true;

            form.submit();
        }
    }


    // =====================================
    // FORM SUBMIT
    // =====================================
    form.addEventListener("submit", function(e) {

        e.preventDefault();

        if (!validateAll()) {
            return;
        }

        if (isSubmitting) {
            return;
        }

        if (typeof grecaptcha !== "undefined") {

            grecaptcha.execute();

        } else {

            alert("Captcha not loaded. Please refresh page.");
        }
    });

</script>
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
        var programSwiper = new Swiper(".program-swiper-slider", {
        slidesPerView: 3,
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
    </body>
    </script>
    </body>
</html>

