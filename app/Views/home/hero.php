<!--===== HERO AREA STARTS =======-->
<div class="header-carousel-area3 owl-carousel">
    <?php foreach ($heros as $key => $hero): ?>
        <div class="main-hero-area">
            <div class="img1">
                <img width="900" height="844" src="<?= $img ?>all-images/hero/<?= $hero['image'] ?>" alt="Hero slider images">
            </div>
            <div class="bg-elements">
                <img width="666" height="665" src="<?= $img ?>elements/elements7.png" alt="background element" class="elements2">
            </div>
            <div class="container" style="margin-top: -70px;">
                <div class="row">
                    <div class="col-lg-5 col-md-9">
                        <div class="header-content-area header-heading">
                            <div class="elements">
                                <img src="<?= $img ?>elements/elements3.png" alt="background element">
                            </div>
                            <div class="header-heading2">
                                <h5><i class="fa-solid fa-location-dot"></i><?= $hero['address'] ?></h5>
                                <div class="space20"></div>

                                <?php if ($key == 0): ?>
                                <h1><?= $hero['tagline'] ?></h1>
                                <?php else: ?>
                                <h2><?= $hero['tagline'] ?></h2>
                                <?php endif; ?>

                                <div class="space20"></div>
                                <p><?= $hero['description'] ?></p>
                                <div class="space32"></div>
                                <div class="btn-area1">
                                    <a href="#property-overview" onclick="getStarted()" class="header-btn3">Mulai Jelajahi</a>
                                    <!-- <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="popup-youtube">
                                    <span class="play-btn"><i class="fa-solid fa-play"></i></span>
                                    <span class="text">Video</span>
                                </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <!-- <div class="col-lg-4">
                    <div class="auhtor-box">
                        <div class="others-box">
                            <div class="img3">
                                <img src="<?= $img ?>all-images/others/others-img1.png" alt="">
                            </div>
                            <div class="text">
                                <h3>Luxury Suite Villa</h3>
                                <div class="space10"></div>
                                <p>$1.800,000</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<!--===== HERO AREA ENDS =======-->