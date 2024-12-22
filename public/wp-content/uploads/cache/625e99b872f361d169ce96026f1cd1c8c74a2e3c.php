<p class="byline author vcard">
  <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author" class="fn flex">
    <?php echo User::avatar(); ?><span class="self-center px-2 font-semibold text-sm"><?php echo e(get_the_author()); ?></span>
  </a>
</p>
