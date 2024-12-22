<?php if (! (empty($category = Category::first()))): ?>
    <a
        class="badge badge-indigo mr-2"
        href="<?php echo e($category['link']); ?>"
    >
        <?php echo e($category['name']); ?>

    </a>
<?php endif; ?>
