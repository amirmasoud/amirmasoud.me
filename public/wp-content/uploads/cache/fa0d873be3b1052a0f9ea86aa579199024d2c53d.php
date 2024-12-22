<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments flex flex-wrap max-w-3xl mx-auto mt-20">
  <?php if(have_comments()): ?>
    <p class="block w-full text-right text-gray-500 uppercase text-sm -mb-3">
      <?php echo sprintf(_nx('One response', '%1$s responses', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number())); ?>

    </p>

    <ol class="comment-list">
      <?php echo wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>

    </ol>

    <?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
      <nav>
        <ul class="pager">
          <?php if(get_previous_comments_link()): ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')) ?></li>
          <?php endif; ?>
          <?php if(get_next_comments_link()): ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')) ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; ?>

  <?php if(!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')): ?>
    <div class="alert alert-warning">
      <?php echo e(__('Comments are closed.', 'sage')); ?>

    </div>
  <?php endif; ?>

  <?php comment_form() ?>
</section>
