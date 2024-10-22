<div class="blog-inner-section-area sp6">
    <div class="container">
        <?php if ($posts['status'] === 'post_found') : ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-content heading3 text-center">
                        <h5>Simak Kabar Terbaru Dari Kami</h5>
                    </div>
                </div>
                <div class="space30"></div>
                <?php foreach ($posts['data'] as $post): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-boxarea">
                            <div class="img1 image-anime">
                                <img src="<?= $post->media ?>" alt="Featured Image Post">
                            </div>
                            <div class="content-area">
                                <ul>
                                    <li><a href="#"><img src="<?= $img ?>icons/user.svg" alt="Icon User"> <?= $post->author ?></a> <span> | </span></li>
                                    <li><a href="#"><img src="<?= $img ?>icons/calender.svg" alt="Icon Tanggal"> <?= os_date()->create($post->date, 'd-M-y') ?></a></li>
                                </ul>
                                <div class="space20"></div>
                                <a href="<?= $post->url ?>"><?= $post->title ?></a>
                                <div class="space24"></div>
                                <a href="<?= $post->url ?>" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <div class="col-lg-12">
                    <div class="space30"></div>
                    <?= $pageLinks ?>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-content heading3 text-center">
                        <h5 data-aos="fade-left" data-aos-duration="800">Belum ada postingan yang tersedia.</h5>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>