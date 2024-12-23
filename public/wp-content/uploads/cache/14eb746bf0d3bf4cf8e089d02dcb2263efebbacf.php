<header class="banner my-12">
  <div class="container mx-auto">
    <div class="flex flex-wrap">
      <div class="flex flex-col w-full items-baseline justify-center md:justify-start md:w-1/2 px-4">
        <a class="w-full md:w-auto text-center brand font-serif font-bold text-3xl text-black" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a>
        <span class="w-full md:w-auto text-center italic font-light text-sm"><?php echo e(get_bloginfo('description', 'display')); ?></span>
      </div>
      <div class="flex flex-wrap flex-col md:flex-no-wrap md:flex-row justify-center md:justify-end align-center w-full mt-8 md:w-1/2 md:mt-0">
        <div class="w-auto mx-auto md:mx-0 md:mb-0 mb-4"><?php echo e(get_search_form()); ?></div>
        <nav class="nav-social flex mx-auto md:mx-0 md:mb-8 items-center mb-4">
          <?php if(has_nav_menu('social_navigation')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'social_navigation', 'menu_class' => 'nav_social']); ?>

          <?php endif; ?>
        </nav>
      </div>
    </div>
    <nav class="nav-primary mt-12">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
