<?php $__env->startSection('content'); ?>
  <div class="container mx-auto my-4">
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php if(!have_posts()): ?>
      <div class="alert alert-warning px-4 my-4">
        <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

      </div>
      <div class="m-4">
        <?php echo get_search_form(false); ?>

      </div>
    <?php endif; ?>
  </div>

  <div class="flex flex-wrap container mx-auto">
    <?php while(have_posts()): ?> <?php the_post() ?>
      <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>

    <div class="w-full">
      <?php echo get_the_posts_navigation(); ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>