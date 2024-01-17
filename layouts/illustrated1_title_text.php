<?php 
    $title = $flexible_content["title"];
    var_dump($title);
    $subtitle = $flexible_content["subtitle"];
    $info = $flexible_content["info"];
    $text = $flexible_content["text"];
    $illustration = $flexible_content["illustration"];
    $layout = $flexible_content["layout"];
    $var = ($layout == 'img_left') ? 'invert' : '';
?>

<article class="img_text <?php echo (isset($var)) ? $var : ''; ?>">
    <div class="content">
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $subtitle; ?></h2>
        <h3><?php echo $info; ?></h3>
        <div class="paragraph"><?php echo $paragraph; ?></p>
    </div>
    <div class="img">
        <img 
                loading="lazy"
                src="<?php echo esc_url($illustration['url']); ?>"
                alt="<?php echo esc_attr($illustration['alt']); ?>"
            >
    </div>
</article>