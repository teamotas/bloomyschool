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
        $title = "Video Gallery";

        $breadcrumbs = [
            ['label' => 'Home', 'link' => 'index.php'],
            ['label' => 'Video Gallery', 'link' => null]
        ];

        include './layout/breadcrumb.php';
    ?>

    <!-- ===================== Video Gallery section start ========================= -->
    <style>
        .cover-img {
            /* height: 300px;
            object-fit: cover; */
            border-radius: 50px;
        }
    </style>
    <!-- ========================== our gallery section start ========================== -->
    <section class="py-110 ">
        <style>
.video-card {
    border-radius: 16px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    transition: 0.3s ease;
}

.video-card:hover {
    transform: translateY(-6px);
}

.video-frame {
    position: relative;
    width: 100%;
    padding-top: 56.25%; /* 16:9 ratio */
}

.video-frame iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}

.video-title {
    padding: 12px 15px;
    font-weight: 600;
    font-size: 15px;
}
</style>

<div class="container py-5">
    <div class="row g-4">

        <!-- Video Item -->
        <div class="col-lg-4 col-md-6">
            <div class="video-card">
                <div class="video-frame">
                    <iframe 
                        src="https://www.youtube.com/embed/ZswxoB2f9DQ" 
                        title="Bloomy Video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-title">
                    Bloomy Preschool Activity
                </div>
            </div>
        </div>

        
    </div>
</div>
    </section>
    <!-- ========================== our gallery section end ========================== -->
     
    <!-- ===================== Video Gallery section end ========================= -->

    <?php include('./layout/newsletter.php') ?>

    <?php include('./layout/footer-1.php') ?>

    <?php include('./layout/link-js.php') ?>
    </body>
</html>
