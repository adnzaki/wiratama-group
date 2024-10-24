<script>
    const baseURL = "<?= base_url() ?>";
    const whatsappNumber = "<?= $contactWhatsapp ?>";
    const propertyRequestText = "<?= $contactMessage ?? '' ?>";
</script>

<?php if (strpos(current_url(), 'read-post') !== false): ?>
    <?= view('read-post/script') ?>
<?php endif ?>

<!--===== JS SCRIPT LINK =======-->
<script src="<?= $js ?>plugins/bootstrap.min.js"></script>
<script src="<?= $js ?>plugins/fontawesome.js"></script>
<script src="<?= $js ?>plugins/aos.js"></script>
<script src="<?= $js ?>plugins/counter.js"></script>
<script src="<?= $js ?>plugins/sidebar.js"></script>
<script src="<?= $js ?>plugins/magnific-popup.js"></script>
<script src="<?= $js ?>plugins/mobilemenu.js"></script>
<script src="<?= $js ?>plugins/owlcarousel.min.js"></script>
<script src="<?= $js ?>plugins/nice-select.js"></script>
<script src="<?= $js ?>plugins/waypoints.js"></script>
<script src="<?= $js ?>plugins/slick-slider.js"></script>
<script src="<?= $js ?>plugins/circle-progress.js"></script>
<script src="<?= $js ?>plugins/gsap.min.js"></script>
<script src="<?= $js ?>plugins/ScrollTrigger.min.js"></script>
<script src="<?= $js ?>plugins/Splitetext.js"></script>
<script src="<?= $js ?>main.js"></script>
<script defer src="<?= $js ?>app.js"></script>