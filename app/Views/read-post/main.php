<!DOCTYPE html>
<html lang="en">

<?= view('layout/head') ?>

<body class="homepage3-body">

    <?= view('layout/preloader') ?>

    <?= view('layout/header') ?>

    <?= view('layout/mobile-header') ?>


    <!-- Content goes here -->
    <?= view('blogs/hero') ?>

    <div class="blog-details-leftarea sp6">
        <div class="container">
            <div class="row">
                <?= view('read-post/post-content') ?>
                <?= view('read-post/post-sidebar') ?>
            </div>
        </div>
    </div>
    <!-- #END CONTENT -->

    <?= view('layout/footer') ?>

    <?= view('layout/scripts') ?>

</body>

</html>