<!--===== HERO AREA STARTS =======-->
<div class="inner-main-hero-area">
    <div class="img1 <?= ($details['property_url'] === 'wiratama-residence-2' ? 'w-residence-2-hero1' : '') ?>">
        <img src="<?= $img ?>all-images/products/<?= $details['hero1'] ?>" alt="">
    </div>
    <div class="img2">
        <img src="<?= $img ?>all-images/products/<?= $details['hero2'] ?>" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="inner-heading header-heading">
                    <h2><?= $details['product_name'] ?></h2>
                    <div class="space24"></div>
                    <p>
                        <a href="<?= base_url() ?>">Home <i class="fa-solid fa-angle-right"></i></a>
                        <a href="<?= base_url($propertyURL) ?>"><?= $details['property_name'] ?> <i class="fa-solid fa-angle-right"></i></a>
                        <a href="#"><?= $details['product_name'] ?></a>
                    </p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <!-- <div class="col-lg-4">
                <div class="auhtor-box">
                    <div class="others-box">
                        <div class="img3">
                            <img src="<? //= $img 
                                        ?>all-images/others/others-img1.png" alt="">
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
<!--===== HERO AREA ENDS =======-->