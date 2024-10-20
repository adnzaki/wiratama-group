<div class="apartment-details-left sp6" id="app">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="details-leftarea">

                    <div class="apartment-details-list">
                        <h3>Properti Lainnya</h3>

                        <?php foreach ($otherProducts as $product): ?>
                            <?php $productLink = $baseProductURL . $product['permalink']; ?>
                            <div class="space30"></div>
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-6">
                                    <a href="<?= $productLink ?>">
                                        <div class="img1">
                                            <img src="<?= $baseImageURL . $product['thumbnail'] ?>" alt="Thumbnail Tipe <?= $product['product_name'] ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="content-area">
                                        <a href="<?= $productLink ?>"><?= $product['product_name'] ?></a>
                                        <div class="space16"></div>
                                        <ul>
                                            <?php
                                            $specs = explode(',', $product['specification']);
                                            $startingPrice = 'Rp. ' . number_format($product['start_price'], 0, ',', '.');
                                            ?>
                                            <li><a href="<?= $productLink ?>"><img src="<?= $img ?>icons/bed-icon1.svg" alt=""> <?= $specs[0] ?></a></li>&nbsp;&nbsp;
                                            <li><a href="<?= $productLink ?>"><img src="<?= $img ?>icons/bat-icon1.svg" alt=""> <?= $specs[1] ?></a></li><br />
                                            <li><a href="<?= $productLink ?>" class="m-0"><img src="<?= $img ?>icons/squre-icon1.svg" alt=""> <?= $specs[2] ?></a></li>
                                        </ul>
                                        <div class="space20"></div>
                                        <p><a href="<?= $productLink ?>"><?= $startingPrice ?></a></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="space40"></div>
                    <div class="details-area">
                        <h3>Galeri Properti</h3>
                        <div class="space32"></div>
                        <div class="details-slider owl-carousel">
                            <?php foreach ($details['gallery'] as $image): ?>
                                <div class="img1">
                                    <img src="<?= $baseImageURL . $image['image_file'] ?>.webp" alt="Galeri Properti Tipe <?= $details['product_name'] ?>">
                                </div>
                            <?php endforeach; ?>
                            <!-- <div class="img1">
                                <img src="<? //= $img 
                                            ?>all-images/apartment/apartment-img25.png" alt="">
                            </div>
                            <div class="img1">
                                <img src="<? //= $img 
                                            ?>all-images/apartment/apartment-img25.png" alt="">
                            </div>
                            <div class="img1">
                                <img src="<? //= $img 
                                            ?>all-images/apartment/apartment-img25.png" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="apartment-author-area pdleft">
                    <div class="img1">
                        <img src="<?= $baseImageURL . $details['featured_image'] ?>" alt="Featured Image Tipe <?= $details['product_name'] ?>">
                    </div>
                    <div class="space40"></div>
                    <h2><?= $pageTitle ?></h2>
                    <div class="space20"></div>
                    <p class="text-justify"><?= $details['description'] ?></p>
                    <div class="space40"></div>
                    <h3>Fitur Utama</h3>
                    <div class="space20"></div>
                    <p>Berikut adalah fitur utama yang bisa anda dapatkan dari tipe <?= $details['product_name'] ?>:</p>
                    <div class="space20"></div>
                    <div class="row">
                        <?php
                        $features = explode(',', $details['features']);
                        ?>
                        <?php foreach ($features as $feature) : ?>
                            <?php
                            $splitFeature = explode('|', $feature);
                            $name = $splitFeature[0];
                            $icon = $splitFeature[1];
                            ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="list-area">
                                    <div class="icons">
                                        <img src="<?= $img ?>icons/<?= $icon ?>.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <a href="#"><?= $name ?> </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="space40"></div>

                    <div class="apartment-contactbox">
                        <h3>Berminat? Hubungi Kami Sekarang!</h3>
                        <div class="space16"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <input type="text" required placeholder="Your Name*" v-model="contactName">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <textarea name="#" id="#" required v-model="contactMessage" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="space24"></div>
                            <div class="col-lg-12">
                                <div class="alert alert-danger custom-alert" v-if="showWarning" role="alert">
                                    Silakan isi form pesan dengan lengkap!
                                </div>
                            </div>
                            <div class="space24"></div>

                            <div class="col-lg-12">
                                <div class="input-area text-end">
                                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                                        <a href="javascript:void()" @click="sendWhatsapp" class="header-btn4">Kirim Pesan</a>
                                    </div>
                                </div>
                                <!-- <button type="button" class="header-btn4">Send Message</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>