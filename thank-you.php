<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $metaDescription = "Thank you for contacting Bloomy Preschool. Our team will get in touch with you shortly regarding your inquiry or admission request.";

        $metaKeywords = "thank you preschool, admission confirmation, bloomy preschool contact";

        include('./layout/head.php');
    ?>
    <!-- Title -->
    <title>Thank You | Bloomy Preschool</title>

    <?php include('./layout/link-css.php') ?>
</head>

<body>
    <?php include('./layout/scroll-over-preload.php') ?>
    <?php include('./layout/mobile-menu.php') ?>
    <?php include('./layout/search-box.php') ?>
    <?php include('./layout/header-top.php'); ?>
    <?php include('./layout/header.php'); ?>

    <?php
        $title = "Thank You";

        $breadcrumbs = [
            ['label' => 'Home', 'link' => 'index.php'],
            ['label' => 'Thank You', 'link' => null]
        ];

        include './layout/breadcrumb.php';
    ?>

    <section class="py-110">
        <div class="container">
            <div class="row gy-4 align-items-center">

                <!-- Content -->
                <div class="col-lg-6">
                    <div>
                        <span class="fw-normal tw-text-405 text-main-600 tw-mb-6">
                            Thank You!
                        </span>

                        <h4 class="fw-bold text-neutral-950 tw-mb-4">
                            Your Request Has Been Successfully Submitted
                        </h4>

                        <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-8">
                            Thank you for reaching out to Bloomy Preschool. Our team will contact you shortly to assist you with admission details or your query. We look forward to welcoming your child to a joyful learning environment.
                        </p>

                        <div class="d-flex flex-wrap gap-3">
                            <a href="index.php" class="btn btn-main-two hover-style-two button--stroke active-scale-094 tw-duration-100 tw-border-bottom-main-two-600 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4">
                                <span class="button__flair"></span>
                                <span class="button__label">Go To Homepage</span>
                                <span class="text-white tw-text-2xl position-relative">
                                    <img src="assets/images/icon/banner-icon-white.png" alt="icon">
                                </span>
                            </a>

                            <a href="contact-us.php" class="btn btn-outline-main tw-rounded-2xl tw-text-4">
                                Contact Again
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6 text-center">
                    <span class="bg-img">
                        <img src="assets/images/bloom/1.png" alt="Thank You Bloomy Preschool" class="bg-img">
                    </span>
                </div>

            </div>
        </div>
    </section>

    <?php include('./layout/footer-1.php') ?>
    <?php include('./layout/link-js.php') ?>
</body>
</html>