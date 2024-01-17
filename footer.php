  <footer>
    <?php
    $logo = get_field('logo', 'option');
    $phone_number = get_field('phone_number', 'option');
    $link = get_field('link', 'option');
    ?>
    <div class="top">
      <div class="link">
        <a href="<?php echo esc_attr(get_field('facebook', 'option')); ?>"> <img src="<?php echo esc_url(get_template_directory_uri() . '/images/global/facebook_logo.svg'); ?>" alt="Logo"></a>
        <a href="<?php echo esc_attr(get_field('instagram', 'option')); ?>"> <img src="<?php echo esc_url(get_template_directory_uri() . '/images/global/instagram_logo.svg'); ?>" alt="Logo"></a>
        <a href="<?php echo esc_attr(get_field('linkedin', 'option')); ?>"> <img src="<?php echo esc_url(get_template_directory_uri() . '/images/global/linkedin_logo.svg'); ?>" alt="Logo"></a>
      </div>
      <div class="name">
        <p>MARION</p>
        <img loading="lazy" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        <p>CREMONA</p>
      </div>
      <div class="contact">
        <div>
          <p><?php echo $phone_number; ?></p>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/global/phone.svg'); ?>" alt="Logo">
        </div>
        <a href="<?php echo $link; ?>">ME CONTACTER</a>
      </div>
    </div>
    <div class="bottom">
      <?php wp_nav_menu(array('menu' => 'footer')); ?>
      <p>Copyright © 2024 Marion Cremona. Tous droits réservés.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>