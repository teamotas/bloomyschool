<?php
include('program-data.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        // SEO (GLOBAL PAGE)
        $metaDescription = "Explore programs at Bloomy Preschool Sahibabad including toddler, playgroup, nursery, kindergarten and daycare programs.";
        $metaKeywords = "preschool programs Sahibabad, daycare, nursery school, kindergarten Ghaziabad";

        include('./layout/head.php');
    ?>
    <title>Preschool Programs in Sahibabad | Bloomy Preschool</title>
    <?php include('./layout/link-css.php') ?>
  
</head>

<body>
    <?php include('./layout/scroll-over-preload.php') ?>

    <?php include('./layout/mobile-menu.php') ?>

    <?php include('./layout/search-box.php') ?>

    <?php include('./layout/header-top.php'); ?>

    <?php include('./layout/header.php'); ?>

    <?php
        $title = "Our Program";

        $breadcrumbs = [
            ['label' => 'Home', 'link' => 'index.php'],
            ['label' => 'Our Program', 'link' => null]
        ];

        include './layout/breadcrumb.php';
    ?>
    <div class="py-110">
        <div class="container">
            <div class="row gy-4">

                <?php foreach ($programs as $key => $program): ?>

                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up">

                        <div class="border-neutral-300 border tw-rounded-xl tw-px-5 tw-pt-6 tw-pb-8 animation-item">

                            <!-- IMAGE -->
                            <a href="<?= $program['url']?>" class="bg-img overflow-hidden tw-rounded-2xl tw-mb-5">
                                <img src="<?= htmlspecialchars($program['image']) ?>"
                                    alt="<?= htmlspecialchars($program['title']) ?>"
                                    class="bg-img course-item__img tw-duration-300">
                            </a>

                            <div class="position-relative">

                                <!-- TITLE -->
                                <a href="<?= $program['url']?>"
                                class="fw-bold tw-text-5 text-neutral-950 tw-mb-4 hover-text-main-600">
                                    <?= htmlspecialchars($program['breadcrumb']) ?>
                                </a>

                                <!-- DESCRIPTION -->
                                <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-405">
                                    <?= htmlspecialchars($program['short_desc'] ?? $program['desc1']) ?>
                                </p>

                                <!-- DETAILS -->
                                <div class="d-flex align-items-center justify-content-between tw-gap-3 flex-wrap">

                                    <div>
                                        <span class="fw-semibold tw-text-305 text-main-600 d-block">Days</span>
                                        <span class="fw-semibold tw-text-4 text-neutral-950">
                                            <?= htmlspecialchars($program['days']) ?>
                                        </span>
                                    </div>

                                    <div>
                                        <span class="fw-semibold tw-text-305 text-main-600 d-block">Time</span>
                                        <span class="fw-semibold tw-text-4 text-neutral-950">
                                            <?= htmlspecialchars($program['time']) ?>
                                        </span>
                                    </div>

                                    <div>
                                        <span class="fw-semibold tw-text-305 text-main-600 d-block">Age</span>
                                        <span class="fw-semibold tw-text-4 text-neutral-950">
                                            <?= htmlspecialchars($program['age']) ?>
                                        </span>
                                    </div>

                                </div>

                                <!-- <span class="w-100 tw-h-px border-main-200 tw-border-dashed border tw-mt-6 tw-mb-6"></span> -->

                                <!-- CTA -->
                                <!-- <div class="d-flex align-items-center justify-content-between"> -->
<!-- 
                                    <a href="<?= $program['url'] ?>"
                                    class="tw-w-10 tw-h-10 border-main-600 border rounded-circle d-flex align-items-center justify-content-center tw-text-405 text-main-600 hover-bg-main-600 hover-text-white">
                                        <i class="ph-bold ph-arrow-right"></i>
                                    </a> -->

                                    <!-- PRICE -->
                                    <!-- <span class="fw-bold tw-text-5 text-white tw-py-2 tw-px-4"
                                        style="background:#ff7a00;border-radius:10px;">
                                        <?= htmlspecialchars($program['fee']) ?>
                                    </span> -->

                                <!-- </div> -->

                            </div>
                        </div>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!-- <div class="py-110">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="border-neutral-300 border tw-rounded-xl tw-px-5 tw-pt-6 tw-pb-8 animation-item">
                        <span class="bg-img overflow-hidden tw-rounded-2xl tw-mb-5">
                            <img src="./assets/images/thumbs/our-program-two-img1.png" alt="img" class="bg-img course-item__img tw-duration-300">
                        </span>
                        <div class="position-relative">
                            <a href="program-details.php" class="fw-bold tw-text-5 text-neutral-950 tw-mb-4 hover-text-main-600">
                                English Classes
                            </a>
                            <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-405">Our team discussed every single detail to make sure is the most versatile and unique theme created so far.</p>
                            <div class=" d-flex align-items-center justify-content-between tw-gap-3 flex-wrap">
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Weekly</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">9 Days</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Time</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">6.45 Hors</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Age</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">1-2 years</span>
                                </div>
                            </div>
                            <span class="w-100 tw-h-px border-main-200 tw-border-dashed border tw-mt-6 tw-mb-6"></span>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <img src="./assets/images/thumbs/blog-img4.png" alt="img">
                                    <div>
                                        <span class="fw-bold tw-text-4 text-neutral-950 tw-mb-1 d-block 1875rem">John Smith</span>
                                        <span class="fw-normal tw-text-305 text-neutral-600">Teacher</span>
                                    </div>
                                </div>
                                <a href="program-details.php" class="tw-w-10 tw-h-10 border-main-600 border rounded-circle d-flex align-items-center justify-content-center tw-text-405 text-main-600 hover-bg-main-600 hover-text-white tw-duration-300">
                                    <i class="ph-bold ph-arrow-right"></i>
                                </a>
                            </div>
                            <div class="position-absolute top-0 tw-end-0 tw-me-8 tw-mt--65-px">
                                <span style="background-image: url(assets/images/bg/our-program-two-bg-img1.png);" class="bg-img tw-py-6 tw-px-505 fw-bold tw-text-5 text-white">
                                    $45
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="tw-px-5 tw-pt-6 tw-pb-8 border-neutral-300 border tw-rounded-xl animation-item">
                        <span class="bg-img overflow-hidden tw-rounded-2xl tw-mb-5">
                            <img src="./assets/images/thumbs/our-program-two-img2.png" alt="img" class="bg-img course-item__img tw-duration-300">
                        </span>
                        <div class="position-relative">
                            <a href="program-details.php" class="fw-bold tw-text-5 text-neutral-950 tw-mb-4 hover-text-main-600">
                                Junior Nursery
                            </a>
                            <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-405">Our team discussed every single detail to make sure is the most versatile and unique theme created so far.</p>
                            <div class=" d-flex align-items-center justify-content-between tw-gap-3 flex-wrap">
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Weekly</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">9 Days</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Time</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">6.45 Hors</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Age</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">3-4 years</span>
                                </div>
                            </div>
                            <span class="w-100 tw-h-px border-main-200 tw-border-dashed border tw-mt-6 tw-mb-6"></span>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <img src="./assets/images/thumbs/blog-img4.png" alt="img">
                                    <div>
                                        <span class="fw-bold tw-text-4 text-neutral-950 tw-mb-1 d-block 1875rem">John Smith</span>
                                        <span class="fw-normal tw-text-305 text-neutral-600">Teacher</span>
                                    </div>
                                </div>
                                <a href="program-details.php" class="tw-w-10 tw-h-10 border-main-600 border rounded-circle d-flex align-items-center justify-content-center tw-text-405 text-main-600 hover-bg-main-600 hover-text-white tw-duration-300">
                                    <i class="ph-bold ph-arrow-right"></i>
                                </a>
                            </div>
                            <div class="position-absolute top-0 tw-end-0 tw-me-8 tw-mt--65-px">
                                <span style="background-image: url(assets/images/bg/our-program-two-bg-img2.png);" class="bg-img tw-py-6 tw-px-505 fw-bold tw-text-5 text-white">
                                    $55
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="tw-px-5 tw-pt-6 tw-pb-8 border-neutral-300 border tw-rounded-xl animation-item">
                        <span class="bg-img overflow-hidden tw-rounded-2xl tw-mb-5">
                            <img src="./assets/images/thumbs/our-program-two-img3.png" alt="img" class="bg-img course-item__img tw-duration-300">
                        </span>
                        <div class="position-relative">
                            <a href="program-details.php" class="fw-bold tw-text-5 text-neutral-950 tw-mb-4 hover-text-main-600">
                                Discipline Classes
                            </a>
                            <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-405">Our team discussed every single detail to make sure is the most versatile and unique theme created so far.</p>
                            <div class=" d-flex align-items-center justify-content-between tw-gap-3 flex-wrap">
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Weekly</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">9 Days</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Time</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">6.45 Hors</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Age</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">5-6 years</span>
                                </div>
                            </div>
                            <span class="w-100 tw-h-px border-main-200 tw-border-dashed border tw-mt-6 tw-mb-6"></span>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <img src="./assets/images/thumbs/blog-img4.png" alt="img">
                                    <div>
                                        <span class="fw-bold tw-text-4 text-neutral-950 tw-mb-1 d-block 1875rem">John Smith</span>
                                        <span class="fw-normal tw-text-305 text-neutral-600">Teacher</span>
                                    </div>
                                </div>
                                <a href="program-details.php" class="tw-w-10 tw-h-10 border-main-600 border rounded-circle d-flex align-items-center justify-content-center tw-text-405 text-main-600 hover-bg-main-600 hover-text-white tw-duration-300">
                                    <i class="ph-bold ph-arrow-right"></i>
                                </a>
                            </div>
                            <div class="position-absolute top-0 tw-end-0 tw-me-8 tw-mt--65-px">
                                <span style="background-image: url(assets/images/bg/our-program-two-bg-img3.png);" class="bg-img tw-py-6 tw-px-505 fw-bold tw-text-5 text-white">
                                    $65
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="tw-px-5 tw-pt-6 tw-pb-8 border-neutral-300 border tw-rounded-xl animation-item">
                        <a href="program-details.php" class="bg-img overflow-hidden tw-rounded-2xl tw-mb-5 hover-text-main-600">
                            <img src="./assets/images/thumbs/our-program-three-img1.png" alt="img" class="bg-img course-item__img tw-duration-300">
                        </a>
                        <div class="position-relative">
                            <a href="program-details.php" class="fw-bold tw-text-5 text-neutral-950 tw-mb-4 hover-text-main-600">
                                Kids Play Group
                            </a>
                            <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-405">Our team discussed every single detail to make sure is the most versatile and unique theme created so far.</p>
                            <div class=" d-flex align-items-center justify-content-between tw-gap-3 flex-wrap">
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Weekly</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">9 Days</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Time</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">6.45 Hors</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Age</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">5-6 years</span>
                                </div>
                            </div>
                            <span class="w-100 tw-h-px border-main-200 tw-border-dashed border tw-mt-6 tw-mb-6"></span>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <img src="./assets/images/thumbs/blog-img4.png" alt="img">
                                    <div>
                                        <span class="fw-bold tw-text-4 text-neutral-950 tw-mb-1 d-block 1875rem">John Smith</span>
                                        <span class="fw-normal tw-text-305 text-neutral-600">Teacher</span>
                                    </div>
                                </div>
                                <a href="program-details.php" class="tw-w-10 tw-h-10 border-main-600 border rounded-circle d-flex align-items-center justify-content-center tw-text-405 text-main-600 hover-bg-main-600 hover-text-white tw-duration-300">
                                    <i class="ph-bold ph-arrow-right"></i>
                                </a>
                            </div>
                            <div class="position-absolute top-0 tw-end-0 tw-me-8 tw-mt--65-px">
                                <span style="background-image: url(assets/images/bg/our-program-two-bg-img3.png);" class="bg-img tw-py-6 tw-px-505 fw-bold tw-text-5 text-white">
                                    $45
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="border-neutral-300 border tw-rounded-xl tw-px-5 tw-pt-6 tw-pb-8 animation-item">
                        <span class="bg-img overflow-hidden tw-rounded-2xl tw-mb-5">
                            <img src="./assets/images/thumbs/our-program-three-img2.png" alt="img" class="bg-img course-item__img tw-duration-300">
                        </span>
                        <div class="position-relative">
                            <a href="program-details.php" class="fw-bold tw-text-5 text-neutral-950 tw-mb-4 hover-text-main-600">
                                Discipline Program
                            </a>
                            <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-405">Our team discussed every single detail to make sure is the most versatile and unique theme created so far.</p>
                            <div class=" d-flex align-items-center justify-content-between tw-gap-3 flex-wrap">
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Weekly</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">9 Days</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Time</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">6.45 Hors</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Age</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">1-2 years</span>
                                </div>
                            </div>
                            <span class="w-100 tw-h-px border-main-200 tw-border-dashed border tw-mt-6 tw-mb-6"></span>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <img src="./assets/images/thumbs/blog-img4.png" alt="img">
                                    <div>
                                        <span class="fw-bold tw-text-4 text-neutral-950 tw-mb-1 d-block 1875rem">John Smith</span>
                                        <span class="fw-normal tw-text-305 text-neutral-600">Teacher</span>
                                    </div>
                                </div>
                                <a href="program-details.php" class="tw-w-10 tw-h-10 border-main-600 border rounded-circle d-flex align-items-center justify-content-center tw-text-405 text-main-600 hover-bg-main-600 hover-text-white tw-duration-300">
                                    <i class="ph-bold ph-arrow-right"></i>
                                </a>
                            </div>
                            <div class="position-absolute top-0 tw-end-0 tw-me-8 tw-mt--65-px">
                                <span style="background-image: url(assets/images/bg/our-program-two-bg-img1.png);" class="bg-img tw-py-6 tw-px-505 fw-bold tw-text-5 text-white">
                                    $85
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="tw-px-5 tw-pt-6 tw-pb-8 border-neutral-300 border tw-rounded-xl animation-item">
                        <span class="bg-img overflow-hidden tw-rounded-2xl tw-mb-5">
                            <img src="./assets/images/thumbs/our-program-three-img3.png" alt="img" class="bg-img course-item__img tw-duration-300">
                        </span>
                        <div class="position-relative">
                            <a href="program-details.php" class="fw-bold tw-text-5 text-neutral-950 tw-mb-4 hover-text-main-600">
                                Junior Nursery
                            </a>
                            <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-405">Our team discussed every single detail to make sure is the most versatile and unique theme created so far.</p>
                            <div class=" d-flex align-items-center justify-content-between tw-gap-3 flex-wrap">
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Weekly</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">9 Days</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Time</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">6.45 Hors</span>
                                </div>
                                <div>
                                    <span class="fw-semibold tw-text-305 text-main-600 tw-mb-1 d-block">Age</span>
                                    <span class="fw-semibold tw-text-4 text-neutral-950">3-4 years</span>
                                </div>
                            </div>
                            <span class="w-100 tw-h-px border-main-200 tw-border-dashed border tw-mt-6 tw-mb-6"></span>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <img src="./assets/images/thumbs/blog-img4.png" alt="img">
                                    <div>
                                        <span class="fw-bold tw-text-4 text-neutral-950 tw-mb-1 d-block 1875rem">John Smith</span>
                                        <span class="fw-normal tw-text-305 text-neutral-600">Teacher</span>
                                    </div>
                                </div>
                                <a href="program-details.php" class="tw-w-10 tw-h-10 border-main-600 border rounded-circle d-flex align-items-center justify-content-center tw-text-405 text-main-600 hover-bg-main-600 hover-text-white tw-duration-300">
                                    <i class="ph-bold ph-arrow-right"></i>
                                </a>
                            </div>
                            <div class="position-absolute top-0 tw-end-0 tw-me-8 tw-mt--65-px">
                                <span style="background-image: url(assets/images/bg/our-program-two-bg-img2.png);" class="bg-img tw-py-6 tw-px-505 fw-bold tw-text-5 text-white">
                                    $25
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center tw-gap-2 tw-mt-12">
                <button type="button" class="tw-w-11 tw-h-11 border-main-600 border d-flex align-items-center justify-content-center rounded-circle  fw-bold tw-text-4 hover-bg-main-600 hover-text-white tw-duration-300 text-main-600">
                    01
                </button>
                <button type="button" class="tw-w-11 tw-h-11 border-main-600 border d-flex align-items-center justify-content-center rounded-circle  fw-bold tw-text-4 hover-bg-main-600 hover-text-white tw-duration-300 text-main-600">
                    02
                </button>
                <button type="button" class="tw-w-11 tw-h-11 border-main-600 border d-flex align-items-center justify-content-center rounded-circle  fw-bold tw-text-4 hover-bg-main-600 hover-text-white tw-duration-300 text-main-600">
                    <i class="ph-bold ph-arrow-right"></i>
                </button>
            </div>
        </div>
    </div> -->

    <?php include('./layout/newsletter.php') ?>

    <?php include('./layout/footer-1.php') ?>

    <?php include('./layout/link-js.php') ?>
</body>
</html>



