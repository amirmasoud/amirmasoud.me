<?php $__env->startSection('content'); ?>
  <div class="container mx-auto">

    <div class="text-center text-4xl">
      <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <div class="px-4 my-16 text-center">
      <?php if(!have_posts()): ?>
        <div class="alert alert-warning">
          <?php echo e(__('Sorry, but the page you were trying to view does not exist.', 'sage')); ?>

        </div>
        <div class="w-48 mx-auto my-8">
          <?php echo get_search_form(false); ?>

        </div>
      <?php endif; ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>