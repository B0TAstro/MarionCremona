<?php
$title = $content["title"];
$subtitle = $content["subtitle"];
$info = $content["info"];
$text = $content["text"];
$illustration = $content["illustration"];
$layout = $content["layout"];
$var = ($layout == 'img_left') ? 'invert' : '';
?>

<section class="img_text <?php echo (isset($var)) ? $var : ''; ?>">
    <div class="content">
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $subtitle; ?></h2>
        <h3><?php echo $info; ?></h3>
        <div class="paragraph"><?php echo $text; ?></p></div>
    </div>
    <div class="img">
        <img loading="lazy" src="<?php echo esc_url($illustration['url']); ?>" alt="<?php echo esc_attr($illustration['alt']); ?>">
    </div>
</section>