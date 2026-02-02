<?php if (!empty($pager->links())): ?>
    <ul class="pagination justify-content-end">

        <!-- First -->
        <?php if ($pager->hasPrevious()): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getFirst() ?>">First</a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link">First</span>
            </li>
        <?php endif; ?>

        <!-- Previous -->
        <?php if ($pager->hasPrevious()): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getPrevious() ?>">Previous</a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
        <?php endif; ?>

        <!-- Page Numbers -->
        <?php foreach ($pager->links() as $link): ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <?php if ($link['active']): ?>
                    <span class="page-link"><?= $link['title'] ?></span>
                <?php else: ?>
                    <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>

        <!-- Next -->
        <?php if ($pager->hasNext()): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNext() ?>">Next</a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link">Next</span>
            </li>
        <?php endif; ?>

        <!-- Last -->
        <?php if ($pager->hasNext()): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getLast() ?>">Last</a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link">Last</span>
            </li>
        <?php endif; ?>

    </ul>
<?php endif; ?>