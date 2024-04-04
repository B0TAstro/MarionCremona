<header>
  <div class="wrap">
    <div class="nav-mobile">
      <?php $logo = get_field('logo', 'option'); ?>
      <a class="logo_header" href="<?php echo esc_url(home_url()); ?>">
        <img loading="lazy" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
      </a>
      <div id="menuToggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <ul id="menu">
    <li><?php wp_nav_menu(array('menu' => 'menu-principal-1')); ?></li>
    <li><?php wp_nav_menu(array('menu' => 'menu-principal-2')); ?></li>
    <li id="second"><?php wp_nav_menu(array('menu' => 'menu-secondaire')); ?></li>
  </ul>
</header>