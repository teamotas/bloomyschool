<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $metaDescription = "Explore Bloomy Preschool Sahibabad gallery showcasing classroom activities, daycare environment, kids learning, playgroup fun and preschool events.";

        $metaKeywords = "Bloomy Preschool gallery, preschool Sahibabad photos, daycare Ghaziabad images, kids activities, playgroup images, nursery school gallery";

        include('./layout/head.php');
    ?>

    <title>Bloomy Preschool Gallery | Kids Activities & Daycare in Sahibabad</title>


    <?php include('./layout/link-css.php') ?>

</head>

<body>
    <?php include('./layout/scroll-over-preload.php') ?>

    <?php include('./layout/mobile-menu.php') ?>

    <?php include('./layout/search-box.php') ?>

    <?php include('./layout/header-top.php'); ?>

    <?php include('./layout/header.php'); ?>


    <?php
        $title = "Image Gallery";

        $breadcrumbs = [
            ['label' => 'Home', 'link' => 'index.php'],
            ['label' => 'Image Gallery', 'link' => null]
        ];

        include './layout/breadcrumb.php';
    ?>

    <!-- ========================== our gallery section start ========================== -->
    <section class="py-110 ">
        <div class="container">
            <div>
                <div class="row gy-4">
                    <!-- Column 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div>
                            <div class="gallery-thumb w-100 tw-mb-5">
                                <img src="assets/images/bloom/1.png" alt="Bloomy Preschool Activity" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/bloom/1.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="gallery-thumb w-100">
                                <img src="assets/images/bloom/2.png" alt="Classroom Learning" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/bloom/2.png" class="gallery-thumb__link gallery-popup">
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
                                <img src="assets/images/bloom/3.png" alt="Kids Activities" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/bloom/3.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="gallery-thumb w-100">
                                <img src="assets/images/bloom/4.png" alt="Play Area" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/bloom/4.png" class="gallery-thumb__link gallery-popup">
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
                                <img src="assets/images/bloom/5.png" alt="School Environment" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/bloom/5.png" class="gallery-thumb__link gallery-popup">
                                    <span class="bg-white tw-w-15 tw-h-15 rounded-circle tw-text-6 text-main-600 d-flex align-items-center justify-content-center">
                                        <i class="ph-bold ph-plus"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="gallery-thumb w-100">
                                <img src="assets/images/bloom/6.png" alt="Learning Activities" class="cover-img w-100" loading="lazy">
                                <a href="assets/images/bloom/6.png" class="gallery-thumb__link gallery-popup">
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
    
    <?php include('./layout/newsletter.php') ?>

    <?php include('./layout/footer-1.php') ?>

    <?php include('./layout/link-js.php') ?>
</body>
</html>
