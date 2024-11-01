<!--===== ABOUT AREA STARTS =======-->
<div class="about3-section-area sp6">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="about-header text-center heading3 space-margin60">
                    <h5 data-aos="fade-left" data-aos-duration="800">wiratama estate 3</h5>
                    <div class="space20"></div>
                    <h2 class="text-anime-style-3">Jelajahi Properti Unggulan Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="about-slider-area owl-carousel">
                    <?php foreach ($properties as $property) : ?>
                        <div class="img1 reveal image-anime">
                            <img src="<?= $img ?>all-images/best-properties/<?= $property ?>" alt="galeri singkat wiratama estate 3">
                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="space30"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- <div class="about-video-area">
                            <div class="img1 image-anime reveal">
                                <a href="#" class="popup-youtube"><img src="<?= $img ?>all-images/best-properties/wr-achievement.png" alt=""></a>
                            </div>
                        </div> -->
                        <div class="experience-box">
                            <h2 style="font-size: 30px !important;">2 Kamar Tidur</h2>
                            <div class="space20"></div>
                            <p><i class="fa-solid fa-key"></i> &nbsp; Smart Door Lock</p>
                            <div class="space12"></div>
                            <div class="space18"></div>
                            <p><i class="fa-solid fa-square"></i> &nbsp; Lantai Granit</p>
                            <!-- <img src="<?= $img ?>all-images/about/about-img6.png" alt=""> -->
                            <div class="space12"></div>
                            <div class="space18"></div>
                            <p><i class="fa-solid fa-car"></i> &nbsp; Carport Luas</p>
                        </div>
                        <div class="space30 d-md-none d-block"></div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-video-area">
                            <div class="img1 image-anime reveal">
                                <a href="<?= $youtubeLink ?>" aria-label="Thumbnail video youtube" class="popup-youtube"><img src="<?= $img ?>all-images/best-properties/wr-video-thumbnail.webp" alt="thumbnail video youtube"></a>
                            </div>
                            <div class="play-btn">
                                <a href="<?= $youtubeLink ?>" aria-label="Play Video Button" class="popup-youtube"><i class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="space30 d-lg-none d-block"></div>
                <div class="about-widget-images">
                    <div class="img1 reveal image-anime">
                        <img src="<?= $img ?>all-images/best-properties/wr-bima-ab.webp" alt="Tipe Bima A">
                    </div>
                    <div class="content-area">
                        <div class="text">
                            <a href="/wiratama-estate-3">Wiratama Estate 3 - Bima A</a>
                            <div class="space20"></div>
                            <ul>
                                <li><a href="#"><img width="18" height="18" src="<?= $img ?>icons/bed-icon1.svg" alt="icon kasur"> x2</a> <span> | </span></li>
                                <li><a href="#"><img width="18" height="18" src="<?= $img ?>icons/bat-icon1.svg" alt="icon bath tub"> x1</a> <span> | </span></li>
                                <li><a href="#"><img width="18" height="18" src="<?= $img ?>icons/squre-icon1.svg" alt="icon square"> 30 / 60 m2</a></li>
                            </ul>
                        </div>
                        <div class="arrow">
                            <a href="/wiratama-estate-3" aria-label="Pelajari lebih lanjut tentang Wiratama Estate 3"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="elements3">
                        <img src="<?= $img ?>elements/elements3.png" alt="background element">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->