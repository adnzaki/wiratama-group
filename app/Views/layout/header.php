<!--=====HEADER START=======-->
<header>
    <div class="header-area homepage3 header header-sticky d-none d-lg-block " id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="<?= base_url() ?>"><img src="assets/img/logo/<?= $logo ?>" alt=""></a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="<?= base_url() ?>" class="wr-menu-item">Home</a></li>

                                <li><a href="#" class="wr-menu-item">Products <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding wr-menu-dropdown">
                                        <li class="menu-small"><a href="/wiratama-estate-3">Wiratama Estate 3 </a>
                                        </li>
                                        <li class="menu-small"><a href="#">Wiratama Residence 2 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#" class="wr-menu-item">About Us</a></li>
                                <li><a href="#" class="wr-menu-item">Contact</a></li>
                                <li><a href="#" class="wr-menu-item">Blogs</a></li>

                            </ul>
                        </div>
                        <div class="btn-area-author hide-social-media-header">
                            <!-- <div class="search-icon header__search header-search-btn">
                                <a href="#"><img src="assets/img/icons/search-icon1.svg" alt=""> <span></span></a>
                            </div> -->
                            <ul>
                                <li><a target="_blank" href="<?= $facebookPage ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="<?= $instagramProfile ?>"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a target="_blank" href="<?= $youtubeChannel ?>" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a target="_blank" href="<?= $tiktokLink ?>"><i class="fa-brands fa-tiktok"></i></a></li>
                            </ul>
                        </div>

                        <div class="header-search-form-wrapper">
                            <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                            <div class="header-search-container">
                                <form role="search" class="search-form">
                                    <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                    <button type="submit" class="search-submit"><img src="assets/img/icons/search-icon1.svg" alt=""></button>
                                </form>
                            </div>
                        </div>
                        <div class="body-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->