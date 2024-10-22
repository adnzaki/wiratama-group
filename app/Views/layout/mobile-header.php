<!--===== MOBILE HEADER STARTS =======-->
<div class="mobile-header mobile-haeder3 d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="index.html"><img src="<?= $img ?>logo/<?= $logo ?>" alt=""></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar3">
    <div class="logosicon-area">
        <div class="logos">
            <img src="<?= $img ?>logo/<?= $logo ?>" alt="">
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="#">Products</a>
                <ul class="sub-menu">
                    <li><a href="/wiratama-estate-3">Wiratama Estate 3</a></li>
                    <li><a href="/wiratama-residence-2">Wiratama Residence 2</a></li>
                </ul>
            </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/blogs">Blogs</a></li>
        </ul>

        <div class="allmobilesection">
            <a href="#" class="header-btn3">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <div class="single-footer">
                <h3>Contact Info</h3>
                <div class="footer1-contact-info">
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="<?= $contactLink ?>"><?= $contactNumber ?></a>
                        </div>
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="mailto:<?= $email ?>"><?= $email ?></a>
                        </div>
                    </div>

                    <div class="single-footer">
                        <h3>Our Location</h3>

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-text">
                                <a href="#"><?= $location ?></a>
                            </div>
                        </div>

                    </div>
                    <div class="single-footer">
                        <h3>Social Links</h3>

                        <div class="social-links-mobile-menu">
                            <ul>
                                <li><a target="_blank" href="<?= $facebookPage ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="<?= $instagramProfile ?>"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a target="_blank" href="<?= $youtubeChannel ?>"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a target="_blank" href="<?= $tiktokLink ?>"><i class="fa-brands fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== MOBILE HEADER ENDS =======-->