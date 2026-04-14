<?php
// Default values (fallbacks)
$title = $title ?? 'Page Title';
$breadcrumbs = $breadcrumbs ?? [
    ['label' => 'Home', 'link' => 'index.php'],
    ['label' => $title, 'link' => null]
];
?>

<!-- ==================== Breadcrumb Start Here ==================== -->
<section class="breadcrumb pt-110 pb-70 bg-main-two-200 position-relative">
    <img src="./assets/images/shape/banner-shape2.png" class="position-absolute bottom-0 tw-start-0 w-100">
    <img src="./assets/images/shape/newslater-three-shape1.png" class="position-absolute top-0 tw-end-0 tw-mt-15 d-lg-block d-none animation-upDown">
    <img src="./assets/images/shape/newslater-three-shape2.png" class="position-absolute bottom-0 tw-start-0 tw-h-382-px tw-ms-250-px d-lg-block d-none">
    <img src="./assets/images/shape/newsletter-shape2.png" class="position-absolute top-0 tw-start-0 tw-mt-130-px tw-ms-480-px animation-rotate-right d-xl-block d-none">

    <div class="tw-mb-140-px w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="tw-mb-6 text-neutral-950"><?= htmlspecialchars($title) ?></h3>

                    <ul class="d-flex align-items-center justify-content-center tw-gap-4">
                        <?php foreach ($breadcrumbs as $index => $crumb): ?>
                            <li>
                                <?php if ($crumb['link']): ?>
                                    <a href="<?= $crumb['link'] ?>" class="text-main-600">
                                        <?= $crumb['label'] ?>
                                    </a>
                                <?php else: ?>
                                    <span class="text-main-600"><?= $crumb['label'] ?></span>
                                <?php endif; ?>
                            </li>

                            <?php if ($index < count($breadcrumbs) - 1): ?>
                                <li>/</li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->