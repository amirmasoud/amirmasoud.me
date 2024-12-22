<article <?php post_class() ?>>
  <?php if(has_post_thumbnail()): ?>
  <header class="flex flex-wrap container px-4 mx-auto flex-col-reverse md:flex-row justify-between mb-20">
    <div class="w-full md:w-1/2">
      <div class="w-full mb-4"><?php echo $__env->make('partials/category-all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
      <h1 class="entry-title text-5xl md:mr-12 break-words"><?php echo get_the_title(); ?></h1>
      <div class="entry-excerpt mt-12 md:mr-12 text-lg break-words">
        <?php the_excerpt() ?>
      </div>
    </div>
    <?php echo Post::thumbnail('single-thumbnail'); ?>

  </header>
  <?php else: ?>
  <header class="flex flex-wrap container px-4 mx-auto justify-between mb-20">
    <div class="w-full">
      <div class="w-full mb-4"><?php echo $__env->make('partials/category-all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
      <h1 class="entry-title text-5xl md:mr-12 break-words"><?php echo get_the_title(); ?></h1>
      <div class="entry-excerpt mt-12 text-lg break-words">
        <?php the_excerpt() ?>
      </div>
    </div>
  </header>
  <?php endif; ?>
  <div class="entry-content flex flex-wrap container mx-auto text-lg">
    <?php the_content() ?>
  </div>
  <footer class="flex flex-wrap max-w-3xl mx-auto">
    <div class="flex w-full">
      <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

    </div>
    <div class="flex w-full justify-between mx-4">
      <div class="w-full md:w-2/3"><?php echo $__env->make('partials/tag-all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
      <div class="w-full md:w-1/3 text-right"><?php echo $__env->make('partials/entry-time', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
    </div>
  </footer>
  <?php comments_template('/partials/comments.blade.php') ?>
</article>
