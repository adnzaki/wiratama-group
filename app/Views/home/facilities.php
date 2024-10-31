<!--===== SERVICE AREA STARTS =======-->
<div class="service3-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading3 text-center space-margin60">
                    <h5 data-aos="fade-left" data-aos-duration="800">Fasilitas</h5>
                    <div class="space20"></div>
                    <h2 class="text-anime-style-3">Segalanya Lebih Dekat,<br> Lebih Mudah</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($facilities as $facility) : ?>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-duration="<?= $facility['speed'] ?>">
                <?php if($facility['space']) : ?>

                <div class="space40 d-lg-block d-none"></div>

                <?php endif; ?>

                <div class="amenities-boxarea">
                    <div class="img1">
                        <img src="<?= $img ?>all-images/service/<?= $facility['img'] ?>" alt="gambar fasilitas">
                    </div>
                    <div class="space32"></div>
                    <div class="content-area">
                        <a href="#"><?= $facility['title'] ?></a>
                        <div class="space18"></div>
                        <p><?= $facility['description'] ?></p>
                        <h3><?= $facility['number'] ?></h3>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

           
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->