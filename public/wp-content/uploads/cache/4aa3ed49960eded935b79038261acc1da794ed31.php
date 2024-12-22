<?php $__currentLoopData = Tag::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a
        class="mr-2"
        href="<?php echo e($tag['link']); ?>"
    >
        <?php echo e($tag['name']); ?>

    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
