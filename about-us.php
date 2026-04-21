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
        $title = "About Us";

        $breadcrumbs = [
            ['label' => 'Home', 'link' => 'index.php'],
            ['label' => 'About Us', 'link' => null]
        ];

        include './layout/breadcrumb.php';
    ?>

    <?php include('./layout/why-choose.php') ?>

    <!-- <div class="pb-110">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="kindergarden-two-card position-relative bg-img group-item">
                        <span class="bg-img">
                            <img src="./assets/images/thumbs/kindergarden-two-bottom-img1.png" alt="img" class="bg-img">
                        </span>
                        <div class="tw-visible">
                            <span class="tw-py-3 tw-px-5 bg-main-600 text-white tw-rounded-2xl position-absolute bottom-0 tw-start-0 tw-start-50 translate-middle-x tw-mb-17 group-hover-item-hidden">
                                Kindergarten
                            </span>
                        </div>
                        <div class="kindergarden-two-text">
                            <div style="background-image: url(assets/images/bg/kindergarden-two-bottom-bg-img.png);" class="tw-kindergarden-two-border position-absolute bottom-0 tw-start-0 tw-start-50 translate-middle-x text-center w-100">
                                <div class="tw-mb-6 tw-mx-3 tw-mt-8">
                                    <span class="fw-semibold tw-text-4 text-white tw-mb-2 d-block">(4-5 years)</span>
                                    <span class="tw-text-5 fw-bold text-white tw-mb-4">Kids Play Group</span>
                                    <p class="fw-normal tw-text-4 text-white tw-mb-4">We often think that young children<br> are too young to understand.</p>
                                    <a href="blog-details.php" class="fw-bold tw-text-4 text-white d-flex align-items-center tw-gap-3 hover-underline tw-duration-300 justify-content-center">
                                        Read More
                                        <span>
                                            <i class="ph-bold ph-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div class="kindergarden-two-card position-relative bg-img group-item">
                        <span class="bg-img">
                            <img src="./assets/images/thumbs/kindergarden-two-bottom-img2.png" alt="img" class="bg-img">
                        </span>
                        <div class="tw-visible">
                            <span class="tw-py-3 tw-px-5 bg-main-600 text-white tw-rounded-2xl position-absolute bottom-0 tw-start-0 tw-start-50 translate-middle-x tw-mb-17 group-hover-item-hidden">
                                Kindergarten
                            </span>
                        </div>
                        <div class="kindergarden-two-text">
                            <div style="background-image: url(assets/images/bg/kindergarden-two-bottom-bg-img.png);" class="tw-kindergarden-two-border position-absolute bottom-0 tw-start-0 tw-start-50 translate-middle-x text-center w-100">
                                <div class="tw-mb-6 tw-mx-3 tw-mt-8">
                                    <span class="fw-semibold tw-text-4 text-white tw-mb-2 d-block">(4-5 years)</span>
                                    <span class="tw-text-5 fw-bold text-white tw-mb-4">Kids Play Group</span>
                                    <p class="fw-normal tw-text-4 text-white tw-mb-4">We often think that young children<br> are too young to understand.</p>
                                    <a href="blog-details.php" class="fw-bold tw-text-4 text-white d-flex align-items-center tw-gap-3 hover-underline tw-duration-300 justify-content-center">
                                        Read More
                                        <span>
                                            <i class="ph-bold ph-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <div class="kindergarden-two-card position-relative bg-img group-item">
                        <span class="bg-img">
                            <img src="./assets/images/thumbs/kindergarden-two-bottom-img3.png" alt="img" class="bg-img">
                        </span>
                        <div class="tw-visible">
                            <span class="tw-py-3 tw-px-5 bg-main-600 text-white tw-rounded-2xl position-absolute bottom-0 tw-start-0 tw-start-50 translate-middle-x tw-mb-17 group-hover-item-hidden">
                                Physical Development
                            </span>
                        </div>
                        <div class="kindergarden-two-text">
                            <div style="background-image: url(assets/images/bg/kindergarden-two-bottom-bg-img.png);" class="tw-kindergarden-two-border position-absolute bottom-0 tw-start-0 tw-start-50 translate-middle-x text-center w-100">
                                <div class="tw-mb-6 tw-mx-3 tw-mt-8">
                                    <span class="fw-semibold tw-text-4 text-white tw-mb-2 d-block">(4-5 years)</span>
                                    <span class="tw-text-5 fw-bold text-white tw-mb-4">Kids Play Group</span>
                                    <p class="fw-normal tw-text-4 text-white tw-mb-4">We often think that young children<br> are too young to understand.</p>
                                    <a href="blog-details.php" class="fw-bold tw-text-4 text-white d-flex align-items-center tw-gap-3 hover-underline tw-duration-300 justify-content-center">
                                        Read More
                                        <span>
                                            <i class="ph-bold ph-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ============================ about us section start ============================ -->
    <section style="background-image: url(assets/images/index/bloomy-cta-index.png);" class="bg-img">
        <div class="pb-120 tw-pt-396-px">
            <div class="container">
                <div class="d-flex align-items-end tw-gap-5 flex-wrap">
                    <div class="">
                        <h2 class="fw-bold text-white tw-mb-10 h7" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                            Building Strong Foundations for Your Child’s Bright Future
                        </h2>
                        <div class="d-flex align-items-center tw-gap-4 flex-wrap" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                            <a href="about-us.php" class="btn btn-main-two hover-style-two button--stroke active-scale-094 tw-duration-100 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4" data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">Discover Bloomy Preschool</span>
                                <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                                    <img src="./assets/images/icon/banner-icon-white.png" alt="icon">
                                </span>
                            </a>
                            <div>
                                <div class="d-flex align-items-center tw-gap-3">
                                    <img src="./assets/images/icon/about-us-icon1.png" alt="icon">
                                    <div>
                                        <span class="fw-normal tw-text-4 text-white tw-mb-1">Enroll Your Child Today</span>
                                        <h2 class="h5">
                                            <a href="tel:+919810865370" class="fw-bold text-main-two-600" style="color: white;">
                                                +91 981-086-5370
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="rotate-text-wrapper" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                        <a href="about-us.php" class="position-relative pointer-events-auto tw-p-4">
                            <img src="./assets/images/shape/totate-text.png" alt="Rotate Text" class="animation-rotate-right">
                            <span class="position-absolute top-0 tw-start-0 top-50 translate-middle tw-start-50">
                                <span class="bg-white tw-w-100-px tw-h-100-px rounded-circle d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/logo/favicon.png" alt="img">
                                </span>
                            </span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <div class="container"> 
        <div class="tw-mt-6 position-relative">
            <!-- <img src="./assets/images/logo/Png-05.png" alt="shape" class="position-absolute bottom-0 tw-end-50 d-xl-block d-none" style="width: 300px;"> -->
            <div class="d-flex align-items-center tw-gap-15 flex-wrap">
                <div class="d-flex align-items-center tw-gap-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <span>
                        <img src="./assets/images/icon/about-us-icon2.png" alt="icon">
                    </span>
                    <span class="fw-bold tw-text-405 text-neutral-950">Play to Learn</span>
                </div>
                <div class="d-flex align-items-center tw-gap-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <span>
                        <img src="./assets/images/icon/about-us-icon2.png" alt="icon">
                    </span>
                    <span class="fw-bold tw-text-405 text-neutral-950">Funny Games</span>
                </div>
                <div class="d-flex align-items-center tw-gap-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <span>
                        <img src="./assets/images/icon/about-us-icon2.png" alt="icon">
                    </span>
                    <span class="fw-bold tw-text-405 text-neutral-950">Professional Teachers</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ about us section end ============================ -->
        
    <!-- ========================== our gallery bottom section start ========================== -->
    <div class="pt-110">
        <div class="container">
            <div class="row gy-4">

                <!-- Item 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="d-flex align-items-start tw-gap-5 animation-item">
                        <span>
                            <img src="./assets/images/icon/our-galler-bottom-icon1.png" alt="Experienced Teachers" class="animate__swing">
                        </span>
                        <div>
                            <span class="fw-semibold tw-text-405 text-neutral-600 tw-mb-3 d-block">
                                Experienced Teachers
                            </span>
                            <h4 class="fw-normal text-main-600 counter">25+</h4>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="d-flex align-items-start tw-gap-5 animation-item">
                        <span>
                            <img src="./assets/images/icon/our-galler-bottom-icon2.png" alt="Years of Experience" class="animate__swing">
                        </span>
                        <div>
                            <span class="fw-semibold tw-text-405 text-neutral-600 tw-mb-3 d-block">
                                Years of Experience
                            </span>
                            <h4 class="fw-normal text-main-600 counter">10+</h4>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="d-flex align-items-start tw-gap-5 animation-item">
                        <span>
                            <img src="./assets/images/icon/our-galler-bottom-icon3.png" alt="Happy Students" class="animate__swing">
                        </span>
                        <div>
                            <span class="fw-semibold tw-text-405 text-neutral-600 tw-mb-3 d-block">
                                Happy Students
                            </span>
                            <h4 class="fw-normal text-main-600 counter">1000+</h4>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">
                    <div class="d-flex align-items-start tw-gap-5 animation-item">
                        <span>
                            <img src="./assets/images/icon/our-galler-bottom-icon4.png" alt="Activities & Programs" class="animate__swing">
                        </span>
                        <div>
                            <span class="fw-semibold tw-text-405 text-neutral-600 tw-mb-3 d-block">
                                Activities & Programs
                            </span>
                            <h4 class="fw-normal text-main-600 counter">50+</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ========================== our gallery bottom section end ========================== -->

    <!-- ========================== our gallery section start ========================== -->
    <section class="py-110 ">
        <div class="container">
            <div class="tw-mb-4">
                <span class="fw-normal tw-text-505 text-main-600 tw-mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Our Gallery</span>
                <h4 class="fw-bold text-neutral-950" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">View Our Image and Gallery</h4>
            </div>
            <div>
                <a href="image-gallery.php" class="btn btn-main-two hover-style-two button--stroke active-scale-094 tw-duration-100 tw-border-bottom-main-two-600 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4 tw-mb-10" data-block="button" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <span class="button__flair"></span>
                    <span class="button__label">Explore More</span>
                    <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                        <img src="./assets/images/icon/banner-icon-white.png" alt="icon">
                    </span>
                </a>
                <div class="row gy-4">

                    <!-- Column 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div>
                            <div class="gallery-thumb w-100 tw-mb-5">
                                <img src="assets/images/gallery/1.png" alt="Bloomy Preschool Activity" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/gallery/1.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="gallery-thumb w-100">
                                <img src="assets/images/gallery/2.png" alt="Classroom Learning" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/gallery/2.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="tw-mt--32-px">
                            <div class="gallery-thumb w-100 tw-mb-5">
                                <img src="assets/images/gallery/3.png" alt="Kids Activities" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/gallery/3.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="gallery-thumb w-100">
                                <img src="assets/images/gallery/4.png" alt="Play Area" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/gallery/4.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="tw-mt--64-px">
                            <div class="gallery-thumb w-100 tw-mb-5">
                                <img src="assets/images/gallery/5.png" alt="School Environment" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/gallery/5.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="gallery-thumb w-100">
                                <img src="assets/images/gallery/6.png" alt="Learning Activities" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/gallery/6.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>                                                                                   
            
        </div>
    </section>
    <!-- ========================== our gallery section end ========================== -->
    
    <?php //include('./layout/teachers.php') ?>
    <?php include('./layout/testimonial-index.php') ?>


    <!-- ============================== get start now section start ============================== -->
    <div class="position-relative">
        <img src="./assets/images/shape/get-start-now-three-shape-5.png" alt="shape" class="position-absolute top-0 tw-start-0 animation-scalation tw-ms-110-px d-xl-block d-none" style="z-index: 9;">
        <div class="container">
            <div style="background-image: url(assets/images/bg/get-start-three-bg-img.png);" class="bg-img position-relative z-2">
                <img src="./assets/images/shape/brand-slider-shape1.png" alt="shape" class="position-absolute top-0 tw-end-0 tw-me-9 animation-upDown d-xl-block d-none z-n1">
                <img src="./assets/images/shape/get-start-three-shape-one.png" alt="shape" class="position-absolute bottom-0 tw-end-0 z-n1 tw-me-200-px d-xl-block d-none">
                <img src="./assets/images/shape/footer-shape2.png" alt="shape" class="position-absolute bottom-0 tw-start-0 animation-upDown d-xl-block d-none tw-ms-220-px">

                <div class="pt-110" style="padding:100px ;">
                    <div class="max-w-500-px w-100 mx-auto text-center position-relative">
                        <img src="./assets/images/shape/get-start-three-shape-two.png" alt="shape" class="position-absolute bottom-0 tw-end-0 tw-mb--100-px tw-me-124-px d-xl-block d-none">
                        <span class="text-white fw-normal tw-text-505 tw-mb-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                            Start Your Child’s Journey
                        </span>
                        <h2 class="fw-bold text-white tw-mb-5 h4" style="font-size:40px" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                            How to enroll in preschool?
                        </h2>
                        <p class="fw-normal tw-text-4 text-white tw-mb-8" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                            At Bloomy Preschool, we make the admission process simple and welcoming. Visit our campus, meet our caring teachers, engaging environment designed for your child’s early learning.
                        </p>
                        <a href="contact-us.php" class="btn btn-main hover-style-two button--stroke active-scale-094 tw-duration-100 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4" data-block="button" data-aos="fade-up" data-aos-duration="600" data-aos-delay="350">
                            <span class="button__flair"></span>
                            <span class="button__label">Book Your School Visit</span>
                            <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                            <img src="./assets/images/icon/banner-icon-white.png" alt="icon">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================== get start now section end ============================== -->

    <?php //include('./layout/blogs.php') ?>

    <?php //include('./layout/newsletter.php') ?>

    <?php include('./layout/footer-1.php') ?>

    <?php include('./layout/link-js.php') ?>
  </body>
</html>
