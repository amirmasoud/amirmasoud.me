<article <?php post_class('flex content-between flex-wrap p-4 mb-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4') ?>>
  <div class="w-full">
    <header>
      <span>
        <?php echo $__env->make('partials/sticky-pin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </span>
      <a href="<?php echo e(get_permalink()); ?>">
        <?php echo Post::thumbnail('home-thumbnail'); ?>

      </a>
      <?php echo $__env->make('partials/category-first', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('partials/entry-time', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <h2 class="mt-4 mb-2 entry-title text-3xl break-words"><a class="text-black hover:text-indigo-500" href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h2>
    </header>
    <div class="entry-summary break-words">
      <?php the_excerpt() ?>
    </div>
  </div>
  <div class="w-full mt-4">
    <?php echo $__env->make('partials/entry-author', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</article>
