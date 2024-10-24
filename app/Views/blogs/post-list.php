<div class="blog-inner-section-area blog-details-leftarea sp6">
    <div class="container">
        <?php if ($posts['status'] === 'post_found') : ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-content heading3 text-center">
                        <h5>Simak Kabar Terbaru Dari Kami</h5>
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- <div class="col-lg-12">
                        <div class="space28"></div>
                        <div class="blog-details-left">
                            <div class="search-area">
                                <div class="space28"></div>
                                <form action="<? //= base_url('blogs') 
                                                ?>" method="get">
                                    <input type="text" name="search" placeholder="Pencarian post....">
                                    <button type="submit" class="header-btn4">Cari Postingan</button>
                                </form>
                            </div>
                        </div>
                    </div> -->

                    <div class="space40"></div>
                    <?php foreach ($posts['data'] as $post): ?>
                        <div class="col-lg-12">
                            <div class="blog-boxarea">
                                <a href="<?= $post->url ?>">
                                    <div class="img1 image-anime">
                                        <img src="<?= $post->media ?>" alt="Featured Image Post">
                                    </div>
                                </a>
                                <div class="content-area">
                                    <ul>
                                        <li><a href="#"><img src="<?= $img ?>icons/user.svg" alt="Icon User"> <?= $post->author ?></a> <span> | </span></li>
                                        <li><a href="#"><img src="<?= $img ?>icons/calender.svg" alt="Icon Tanggal"> <?= os_date()->create($post->date, 'd-M-y') ?></a></li>
                                    </ul>
                                    <div class="space20"></div>
                                    <a href="<?= $post->url ?>"><?= $post->title ?></a>
                                    <div class="space24"></div>
                                    <p><?= $post->excerpt ?>...</p>
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
                
                <?= view('read-post/post-sidebar') ?>
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