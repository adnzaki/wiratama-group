<div class="col-lg-7">
    <div class="blog-author-area pdright">
        <div class="img1">
            <img src="<?= $post->singlePostImage ?>" alt="">
        </div>
        <div class="space40"></div>
        <ul>
            <li><a href="#"><img width="20" height="20" src="<?= $img ?>icons/account-icon.svg" alt=""> <?= $post->author ?></a> <span> | </span></li>
            <!-- <li><a href="#"><i class="fa-solid fa-tag"></i> Dream Home</a> <span> | </span></li> -->
            <li><a href="#"><i class="fa-solid fa-calendar-days"></i> <?= os_date()->create($post->date, 'd-M-y') ?></a></li>
        </ul>
        <div class="space32"></div>
        <h2><?= $post->title ?></h2>
        <div class="space20"></div>
        <p><?= $post->content ?></p>
        <div class="space20"></div>
        <p>
            <i class="fa-solid fa-layer-group"></i>
            <?php foreach ($categories as $index => $category): ?>
                <a href="<?= base_url('blogs/category/' . $category->slug) ?>"><?= $category->name ?></a>
                <?= $index + 1 < count($categories) ? ',' : '' ?>
            <?php endforeach; ?>

        </p>
        <div style="margin-top: -10px;"></div>
        <p>
            <i class="fa-solid fa-tag"></i>
            <?php foreach ($tags as $tag): ?>
                <a href="<?= base_url('blogs/tag/' . $tag->slug) ?>">#<?= $tag->name ?></a>&nbsp;
            <?php endforeach; ?>
        </p>
        <div class="space16"></div>
    </div>
</div>