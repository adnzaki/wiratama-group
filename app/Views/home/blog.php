<!--===== BLOG AREA STARTS =======-->
<?php if($posts['status'] === 'post_found') : ?>
<div class="blog3-section-area sp7">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="blog-header text-center heading3 space-margin60">
                    <h5 data-aos="fade-left" data-aos-duration="800">Our Blog</h5>
                    <div class="space20"></div>
                    <h2 class="text-anime-style-3">Our News & Articles</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($posts['data'] as $post): ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="blog-boxarea">
                        <div class="img1 image-anime">
                            <img src="<?= $post->media ?>" alt="">
                        </div>
                        <div class="content-area">
                            <ul>
                                <li><a href="#"><img src="assets/img/icons/user.svg" alt=""> <?= $post->author ?></a> <span> | </span></li>
                                <li><a href="#"><img src="assets/img/icons/calender.svg" alt=""> <?= os_date()->create($post->date, 'd-M-y') ?></a></li>
                            </ul>
                            <div class="space20"></div>
                            <a href="<?= $post->url ?>"><?= $post->title ?></a>
                            <div class="space24"></div>
                            <a href="<?= $post->url ?>" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="btn-area1 text-center" data-aos="fade-left" data-aos-duration="1200">
            <a href="<?= base_url('blog') ?>" class="header-btn4">See Our Blog</a>
        </div>
    </div>
</div>
<?php endif; ?>
<!--===== BLOG AREA ENDS =======-->