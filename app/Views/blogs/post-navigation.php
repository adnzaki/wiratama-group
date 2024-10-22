<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */
$pager->setSurroundCount(2)
?>

<div class="pagination-area">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?= $pager->hasPreviousPage() ? '' : 'disabled' ?>">
                <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="Previous">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>
            <?php foreach ($pager->links() as $link) : ?>
                <li class="page-item">
                    <a class="<?= $link['active'] ? 'page-link active' : 'page-link' ?>" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
                </li>
            <?php endforeach ?>
            <li class="page-item <?= $pager->hasNextPage() ? '' : 'disabled' ?>">
                <a class="page-link m-0" href="<?= $pager->getNextPage() ?>" aria-label="Next">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>