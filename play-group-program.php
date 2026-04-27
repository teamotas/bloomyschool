<?php
include('program-data.php');

$data = $programs['playgroup'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $metaDescription = htmlspecialchars($data['meta_desc'] ?? 'Best preschool program in Sahibabad');

        $metaKeywords = htmlspecialchars($data['meta_keywords'] ?? 'Best preschool program in Sahibabad');

        include('./layout/head.php');
    ?>

    <title><?= htmlspecialchars($data['title'] ?? 'Bloomy Preschool') ?></title>

    <?php include('./layout/link-css.php') ?>

</head>

<body>
    <?php include('./layout/scroll-over-preload.php') ?>

    <?php include('./layout/mobile-menu.php') ?>

    <?php include('./layout/search-box.php') ?>

    <?php include('./layout/header-top.php'); ?>

    <?php include('./layout/header.php'); ?>

    <?php
        $title = htmlspecialchars($data['breadcrumb'] ?? 'Program');

        $breadcrumbs = [
            ['label' => 'Home', 'link' => 'index.php'],
            ['label' => htmlspecialchars($data['breadcrumb'] ?? 'Program'), 'link' => null]
        ];

        include './layout/breadcrumb.php';
    ?>

    <div class="py-110">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-8">
                    <div>
                        <img src="<?= htmlspecialchars($data['image'] ?? './assets/images/thumbs/program-detail-img1.png') ?>"
                            alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>"
                            class="w-100 tw-mb-7">

                        <!-- <img src="./assets/images/thumbs/program-detail-img1.png" 
                        alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>" 
                        class="w-100 tw-mb-7"> -->

                        <h1 class="fw-bold tw-text-30-px text-neutral-950 tw-mb-5 h5" style="font-size:35px">
                            <?= htmlspecialchars($data['title'] ?? 'Program Title') ?>
                        </h1>

                        <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-6">
                            <?= htmlspecialchars($data['desc1']) ?>
                        </p>

                        <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-10">
                            <?= htmlspecialchars($data['desc2']) ?>
                        </p>

                        <h2 class="fw-bold tw-text-30-px text-neutral-950 tw-mb-5 h5">Requirements for The Classes</h2>
                        <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-6">
                            <?= htmlspecialchars($data['requirements_head']) ?>
                        </p>
                        <div class="tw-mb-9">
                            <?php if (!empty($data['requirements'])): ?>
                                <?php foreach($data['requirements'] as $item): ?>
                                    <div class="d-flex align-items-center tw-gap-1 tw-mb-4">
                                        <span class="tw-text-4 text-main-600">
                                            <i class="ph-bold ph-check"></i>
                                        </span>
                                        <span class="fw-normal tw-text-4 text-paragraph-500">
                                            <?= htmlspecialchars($item) ?>
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <img src="<?= htmlspecialchars($data['image'] ?? './assets/images/thumbs/program-detail-img1.png') ?>" 
                        alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>"
                         class="w-100 tw-mb-8">

                        <h2 class="fw-bold tw-text-30-px text-neutral-950 tw-mb-5 h5">Why Choose This Program</h2>
                        
                        <p class="fw-normal tw-text-4 text-paragraph-500 tw-mb-6">
                            <?= htmlspecialchars($data['goal'] ?? '') ?>
                        </p>
                        
                        <div class="d-flex align-items-center tw-gap-10 flex-wrap tw-mb-10" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">

                            <div class="max-w-275-px w-100">
                                <div class="d-flex align-items-center tw-gap-2 tw-mb-3">
                                    <span>
                                        <img src="./assets/images/icon/about-us-icon2.png" 
                                        alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>">
                                    </span>
                                    <span class="fw-bold tw-text-405 text-neutral-950">Experienced Teachers</span>
                                </div>
                                <p class="fw-normal tw-text-4 text-paragraph-500">
                                    Our trained and caring educators focus on each child’s development, ensuring a safe, supportive and engaging learning experience.
                                </p>
                            </div>

                            <div class="max-w-275-px w-100">
                                <div class="d-flex align-items-center tw-gap-2 tw-mb-3">
                                    <span>
                                        <img src="./assets/images/icon/kindergarden-two-icon2.png" 
                                        alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>">
                                    </span>
                                    <span class="fw-bold tw-text-405 text-neutral-950">Safe & Nurturing Environment</span>
                                </div>
                                <p class="fw-normal tw-text-4 text-paragraph-500">
                                    We provide a secure, child-friendly environment where kids feel comfortable, build confidence and enjoy learning every day.
                                </p>
                            </div>

                        </div>
                        <div class="d-flex align-items-center tw-gap-4 flex-wrap" data-aos="fade-up" data-aos-duration="600" data-aos-delay="450">
                            <a href="about-us.php" class="btn btn-main-two hover-style-two button--stroke active-scale-094 tw-duration-100 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4 tw-border-bottom-main-two-600" data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">Explore More</span>
                                <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                                    <img src="./assets/images/icon/banner-icon-white.png" 
                                    alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>">
                                </span>
                            </a>
                            <div class="d-flex align-items-center tw-gap-3">
                                <span class="">
                                    <img src="./assets/images/icon/kindergarden-two-icon1.png" 
                                    alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>">
                                </span>
                                <div>
                                    <span class="fw-normal tw-text-4 text-black tw-mb-2">Call Now</span>
                                    <h2 class="h5">
                                        <a href="tel:9810865370" class="fw-bold text-gren-600">
                                             9810865370
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div>
                        <div class="position-relative tw-mb-5">
                            <img src="./assets/images/index/program-side.png" 
                            alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>"
                             class="bg-img">
                            <a href="https://youtu.be/rTm__eYsUuE?si=7CFsyzlqJORd-3NE" class="play-button play-button-two tw-w-15 tw-h-15 border-main-two-600 border rounded-circle d-flex align-items-center justify-content-center position-absolute top-0 tw-start-0 top-50 tw-start-50 translate-middle">
                                <img src="./assets/images/icon/our-testimonial-top-icon.png" 
                                alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>">
                            </a>
                        </div>
                        <div class="tw-py-10 tw-px-7 border-neutral-200 border tw-rounded-xl tw-mb-12">
                            <h2 class="fw-bold h5 text-neutral-950 tw-mb-7">Classes includes:</h2>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between border-neutral-200 border-top border-bottom tw-py-5">
                                <span class="fw-semibold tw-text-4 text-neutral-950">
                                    Age:
                                </span>
                                <span class="fw-normal tw-text-4 text-paragraph-500">
                                    <?= htmlspecialchars($data['age'] ?? '-') ?>
                                </span>
                            </div>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between border-neutral-200 border-bottom tw-py-5">
                                <span class="fw-semibold tw-text-4 text-neutral-950">
                                    Duration:
                                </span>
                                <span class="fw-normal tw-text-4 text-paragraph-500">
                                    <?= htmlspecialchars($data['time'] ?? '-') ?>
                                </span>
                            </div>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between border-neutral-200 border-bottom tw-py-5">
                                <span class="fw-semibold tw-text-4 text-neutral-950">
                                    Lessons:
                                </span>
                                <span class="fw-normal tw-text-4 text-paragraph-500">
                                    15
                                </span>
                            </div>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between border-neutral-200 border-bottom tw-py-5">
                                <span class="fw-semibold tw-text-4 text-neutral-950">
                                    Students:
                                </span>
                                <span class="fw-normal tw-text-4 text-paragraph-500">
                                    50
                                </span>
                            </div>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between border-neutral-200 border-bottom tw-py-5">
                                <span class="fw-semibold tw-text-4 text-neutral-950">
                                Certifications:
                                </span>
                                <span class="fw-normal tw-text-4 text-paragraph-500">
                                Yes
                                </span>
                            </div>
                            <div class="d-flex align-items-center tw-gap-3 justify-content-between border-neutral-200 border-bottom tw-py-5">
                                <span class="fw-semibold tw-text-4 text-neutral-950">
                                Language:
                                </span>
                                <span class="fw-normal tw-text-4 text-paragraph-500">
                                English
                                </span>
                            </div>
                            <!-- <div class="d-flex align-items-center tw-gap-3 justify-content-between border-neutral-200 tw-pt-5">
                                <span class="fw-semibold tw-text-4 text-neutral-950">
                                Programs Fee:
                                </span>
                                <span class="fw-normal tw-text-4 text-main-600">
                                    <?= htmlspecialchars($data['fee'] ?? '-') ?>
                                </span>
                            </div> -->
                            <div class="tw-mt-10">
                                <div class="w-100 d-flex justify-content-center w-100">
                                    <a href="apply-for-admission.php" class="btn btn-main-two hover-style-two button--stroke active-scale-094 tw-duration-100 tw-border-bottom-main-two-600 d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-rounded-2xl tw-text-4 max-w-300-px w-100" data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Enroll Your Kid</span>
                                        <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                                            <img src="./assets/images/icon/banner-icon-white.png" 
                                            alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>">
                                        </span>
                                    </a>
                                </div>
                                <div class="tw-mt-7 d-flex align-items-center tw-gap-2 justify-content-center flex-wrap">
                                    <span class="fw-semibold tw-text-4 text-paragraph-600">
                                        Share:
                                    </span>
                                    <ul class="d-flex align-items-center tw-gap-2 flex-wrap">
                                        <li>
                                            <a href="https://www.facebook.com/bloomyschools/" class="tw-w-9 tw-h-9 border-main-600 border tw-rounded-xl d-flex align-items-center justify-content-center text-main-600 hover-bg-main-600 hover-text-white tw-duration-300 tw-text-5">
                                                <i class="ph-fill ph-facebook-logo"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://x.com/bloomyschools" class="tw-w-9 tw-h-9 border-main-600 border tw-rounded-xl d-flex align-items-center justify-content-center text-main-600 hover-bg-main-600 hover-text-white tw-duration-300 tw-text-5">
                                                <i class="ph-fill ph-twitter-logo"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.instagram.com/bloomyschools" class="tw-w-9 tw-h-9 border-main-600 border tw-rounded-xl d-flex align-items-center justify-content-center text-main-600 hover-bg-main-600 hover-text-white tw-duration-300 tw-text-5">
                                                <i class="ph-fill ph-instagram-logo"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://youtube.com/@bloomyschools" class="tw-w-9 tw-h-9 border-main-600 border tw-rounded-xl d-flex align-items-center justify-content-center text-main-600 hover-bg-main-600 hover-text-white tw-duration-300 tw-text-5">
                                                <i class="ph-fill ph-youtube-logo"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <span class="w-100">
                            <img src="./assets/images/thumbs/program-detail-img4.png" 
                            alt="<?= htmlspecialchars($data['title'] . ' in Sahibabad at Bloomy Preschool') ?>"
                            class="bg-img">
                        </span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('./layout/newsletter.php') ?>

    <?php include('./layout/footer-1.php') ?>

    <?php include('./layout/link-js.php') ?>
</body>
</html>
