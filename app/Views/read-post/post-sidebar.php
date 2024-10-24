<div class="col-lg-5">
    <?php if (strpos(current_url(), 'read-post') === false): ?>
        <div class="space40"></div>
    <?php endif; ?>


    <div class="blog-details-left">
        <div class="search-area">
            <div class="space28"></div>
            <form action="<?= base_url('blogs') ?>" method="get">
                <input type="text" name="search" placeholder="Pencarian post....">
                <button type="submit" class="header-btn4">Cari Postingan</button>
            </form>
        </div>
        <div class="space40"></div>
        <div class="category-area">
            <?php if (count($allCategories) > 0): ?>
                <h3>Kategori</h3>
            <?php else: ?>
                <h3>Tidak ada kategori</h3>
            <?php endif; ?>
            <div class="space8"></div>
            <ul>
                <?php foreach ($allCategories as $category): ?>
                    <li><a href="<?= base_url('blogs/category/' . $category->slug) ?>"><span><?= $category->name ?></span> <span><i class="fa-solid fa-angle-right"></i></span></a></li>
                <?php endforeach; ?>

            </ul>
        </div>

        <div class="space40"></div>
        <div class="tags-area">
            <?php if (count($allTags) > 0): ?>
                <h3>Tags</h3>
            <?php else: ?>
                <h3>Tidak ada tag</h3>
            <?php endif; ?>
            <div class="space16"></div>
            <ul>
                <?php foreach ($allTags as $tag): ?>
                    <li><a href="<?= base_url('blogs/tag/' . $tag->slug) ?>">#<?= $tag->name ?></a></li>
                <?php endforeach; ?>
            </ul>

           
        </div>
    </div>
</div>