<!--===== FOOTER AREA STARTS =======-->
<div class="footer3-section-area">

    <div class="footer3-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom-area">
                        <div class="footer-menu-area">
                            <div class="footer-logo">
                                <a href="#"><img src="<?= $img ?>logo/<?= $logo ?>" alt=""></a>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="<?= base_url() ?>">Home</a></li>
                                    <li class="space24"></li>
                                    <li><a href="/wiratama-estate-3">Wiratama Estate 3</a></li>
                                    <li class="space24"></li>
                                    <li><a href="/wiratama-residence-2">Wiratama Residence 2</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li class="space24"></li>
                                    <li><a href="#">Contact</a></li>
                                    <li class="space24"></li>
                                    <li><a href="/blogs">Blogs</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu2">
                                <ul>
                                    <?php
                                    $locationArray = explode(',', $location);
                                    ?>
                                    <li>
                                        <a href="#">
                                            <span><i class="fa-solid fa-location-dot"></i></span>
                                            <span><?= $locationArray[0] ?>, </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span style="color: #fff;"><i class="fa-solid fa-location-dot"></i></span>
                                            <span><?= $locationArray[1] ?>, <?= $locationArray[2] ?> </span>
                                        </a>
                                    </li>
                                    <li class="space24"></li>
                                    <li><a href="<?= $contactLink ?>"><span><i class="fa-solid fa-phone"></i></span> <span><?= $contactNumber ?></span></a></li>
                                </ul>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <!-- <li><a href="<?//= $contactLink ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li> -->
                                    <li><a href="<?= $facebookPage ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="<?= $instagramProfile ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="<?= $youtubeChannel ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="<?= $tiktokLink ?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="space48"></div>
                                <div class="copyright-area">
                                    <p>© <?= date('Y') ?> Wiratama Group - Made with ❤️ by <b>ZettaDev</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== FOOTER AREA ENDS =======-->