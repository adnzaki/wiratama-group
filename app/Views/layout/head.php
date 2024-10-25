<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Description -->
    <meta name="description" content="Wiratama Group menghadirkan rumah dengan konsep modern, futuristik, dan mewah dengan harga terjangkau. Temukan hunian impian Anda di lokasi strategis.">

    <!-- Keywords -->
    <meta name="keywords" content="wiratama group, rumah mewah, hunian modern, properti, rumah terjangkau, rumah futuristik, perumahan bali, wiratama estate, wiratama residence">

    <!-- Open Graph / Social Media Metadata (optional) -->
    <meta property="og:title" content="Wiratama Group - Hunian Modern dan Mewah dengan Harga Terjangkau">
    <meta property="og:description" content="Dapatkan hunian berkualitas dengan konsep modern dan mewah dari Wiratama Group. Cocok untuk keluarga yang menginginkan kenyamanan dan harga terjangkau.">
    <meta property="og:image" content="https://wiratama-group.com/<?= $img ?>all-images/wiratama-residence-2/wr-residence2-thumb.png">
    <meta property="og:url" content="https://wiratamagroup.com">
    <meta name="twitter:card" content="summary_large_image">

    <title><?= $pageTitle ?></title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="<?= $img ?>logo/wr-favicon.png" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= $css ?>plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $css ?>plugins/aos.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= $css ?>plugins/fontawesome.css">
    <link rel="stylesheet" href="<?= $css ?>plugins/magnific-popup.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= $css ?>plugins/mobile.css">
    <link rel="stylesheet" href="<?= $css ?>plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="<?= $css ?>plugins/sidebar.css">
    <link rel="stylesheet" href="<?= $css ?>plugins/slick-slider.css">
    <link rel="stylesheet" href="<?= $css ?>plugins/nice-select.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= $css ?>main.css">

    <?php if (strpos(current_url(), 'read-post') !== false): ?>
        <?= view('read-post/style') ?>
    <?php endif ?>
    <link rel="stylesheet" href="<?= $css ?>custom.css">
    <link rel="stylesheet" href="<?= $css ?>responsive.css">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="<?= $js ?>plugins/jquery-3-6-0.min.js"></script>
    <?php if (ENVIRONMENT === 'development'): ?>
        <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <?php else: ?>
        <script defer src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <?php endif ?>
    <script defer src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>