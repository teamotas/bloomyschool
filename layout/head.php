<?php
// Default SEO values (fallback)
$metaDescription = $metaDescription ?? 'Best preschool and daycare for kids learning and growth.';
$metaKeywords = $metaKeywords ?? 'preschool, daycare, kids school, kindergarten';
$metaRobots = $metaRobots ?? 'index, follow';
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
<meta name="keywords" content="<?= htmlspecialchars($metaKeywords) ?>">
<meta name="robots" content="<?= htmlspecialchars($metaRobots) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
