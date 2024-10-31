<!--===== APARTMENT AREA STARTS =======-->
<div class="apartment-inner2-section-area sp7 bg2">
    <div class="container">

        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
                    <div class="apartment-boxarea">
                        <div class="img1">
                            <img src="<?= $img ?>all-images/products/wiratama-estate-3/<?= $product['thumbnail'] ?>" alt="thumnail <?= $product['title'] ?>">
                        </div>
                        <div class="content-area">
                            <a href="<?= $product['url'] ?>"><?= $product['title'] ?></a>
                            <div class="space16"></div>
                            <ul>
                                <li><a href="#"><img src="<?= $img ?>icons/bed-icon1.svg" alt="bed icon"><?= $product['bed'] ?></a> <span> | </span></li>
                                <li><a href="#"><img src="<?= $img ?>icons/bat-icon1.svg" alt="bath tub icon"><?= $product['bath'] ?></a> <span> | </span></li>
                                <li><a href="#"><img src="<?= $img ?>icons/thunder.svg" alt="icon listrik"><?= $product['electricity'] ?></a></li><br />
                                <li><a href="#"><img src="<?= $img ?>icons/squre-icon1.svg" alt="icon square"><?= $product['wide'] ?></a></li>
                            </ul>
                            <div class="space20"></div>
                            <div class="price-area">
                                <a href="#"><?= $product['price'] ?></a>
                            </div>
                        </div>
                        <div class="arrow">
                            <a href="<?= $product['url'] ?>">View</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



        </div>

    </div>
</div>
<!--===== APARTMENT AREA ENDS =======-->