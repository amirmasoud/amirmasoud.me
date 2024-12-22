<?php $__currentLoopData = Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a
        class="badge badge-indigo mr-2"
        href="<?php echo e($category['link']); ?>"
    >
        <?php echo e($category['name']); ?>

    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
