<header>
  <div class="wrap">
    <?php $logo = get_field('logo', 'option'); ?>
    <p><?php bloginfo('name'); ?></p>
    <div class="menu-container">
      <div class="nav-second"><?php wp_nav_menu(array('menu' => 'menu-secondaire')); ?></div>
      <div class="nav-main">
        <?php wp_nav_menu(array('menu' => 'menu-principal-1')); ?>
        <a class="logo_header" href="<?php echo esc_url(home_url()); ?>">
          <img loading="lazy" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        </a>
        <?php wp_nav_menu(array('menu' => 'menu-principal-2')); ?>
      </div>
    </div>
  </div>
</header>