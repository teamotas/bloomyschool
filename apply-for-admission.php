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
                        <span class="fw-normal tw-text-405 text-main-600 tw-mb-6">
                            Admission Open 2026-27
                        </span>
                        <h4 class="fw-bold text-neutral-950 tw-mb-4">
                            Apply for Your Child’s Bright Future
                        </h4>
                        <p class="fw-normal tw-text-4 text-paragraph-500">
                            Enroll your child in a safe, nurturing, and engaging learning environment. Our programs are designed to build strong foundations through fun-based learning, creativity, and care.
                        </p>
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

                            <div class="col-sm-6">
                                <input type="text" name="child_name" id="child_name"
                                    placeholder="Child Name"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" name="child_age" id="child_age"
                                    placeholder="Child Age"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" name="father_name" id="father_name"
                                    placeholder="Fathers Name"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" name="mother_name" id="mother_name"
                                    placeholder="Mothers Name"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                            <div class="col-sm-6">
                                <input type="email" name="email" id="email"
                                    placeholder="Email"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" name="phone" id="phone"
                                    placeholder="Phone number"
                                    class="fw-normal tw-text-4 tw-py-4 tw-px-5 border tw-rounded-md bg-main-two-50 w-100 focus-visible-border-main-600">
                                <small class="error text-danger"></small>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-main-two hover-style-two button--stroke active-scale-094 tw-duration-100 tw-border-bottom-main-two-600 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4 tw-mt-5">
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
                        <img src="./assets/images/thumbs/apply-asmission-img.png" alt="img" class="w-100">
                    </span>
                </div>
            </div>
        </div>
    </section>

    <?php include('./layout/newsletter.php') ?>

    <?php include('./layout/footer-1.php') ?>

    <?php include('./layout/link-js.php') ?>

    <script>
        const form = document.getElementById("admissionForm");

        const childName = document.getElementById("child_name");
        const childAge = document.getElementById("child_age");
        const fatherName = document.getElementById("father_name");
        const motherName = document.getElementById("mother_name");
        const email = document.getElementById("email");
        const phone = document.getElementById("phone");

        function showError(input, message) {
            const small = input.parentElement.querySelector(".error");
            small.innerText = message;
        }

        function showSuccess(input) {
            const small = input.parentElement.querySelector(".error");
            small.innerText = "";
        }

        function validateRequired(input) {
            if (input.value.trim() === "") {
                showError(input, "This field is required");
                return false;
            }
            showSuccess(input);
            return true;
        }

        function validateAge() {
            let val = childAge.value.trim();
            if (val === "" || isNaN(val) || val < 1 || val > 10) {
                showError(childAge, "Enter valid age (1-10)");
                return false;
            }
            showSuccess(childAge);
            return true;
        }

        function validateEmail() {
            let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!pattern.test(email.value.trim())) {
                showError(email, "Invalid email");
                return false;
            }
            showSuccess(email);
            return true;
        }

        function validatePhone() {
            let pattern = /^[6-9]\d{9}$/;
            if (!pattern.test(phone.value.trim())) {
                showError(phone, "Invalid phone number");
                return false;
            }
            showSuccess(phone);
            return true;
        }

        form.addEventListener("submit", function(e) {
            const valid =
                validateRequired(childName) &
                validateAge() &
                validateRequired(fatherName) &
                validateRequired(motherName) &
                validateEmail() &
                validatePhone();

            if (!valid) e.preventDefault();
        });
    </script>
</body>
</html>
