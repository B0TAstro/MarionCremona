<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
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