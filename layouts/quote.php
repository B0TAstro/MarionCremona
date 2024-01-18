<?php
$quote = $content["quote"];
$autor = $content["autor"];
$layout_3 = $content["layout_3"];
?>

<style>
    .quote {
        display: inline-flex;
        padding: 120px 79px;
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;

        <?php if ($layout_3 == 'green') : ?>background-color: #999A8D;
        <?php elseif ($layout_3 == 'yellow') : ?>background-color: #E2B24C;
        <?php elseif ($layout_3 == 'pink') : ?>background-color: #BF7862;
        <?php endif; ?>
    }

    .content_quote {
        display: flex;
        padding: 24px 110px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 25px;

        <?php if ($layout_3 == 'green') : ?>background-color: #BCBEAE;
        <?php elseif ($layout_3 == 'yellow') : ?>background-color: #F7D38B;
        <?php elseif ($layout_3 == 'pink') : ?>background-color: #F0A695;
        <?php endif; ?>
        
        p {
            margin: 0;
        }

        #autor {
            align-self: stretch;
            text-align: right;
        }
    }
</style>

<section class="quote">
    <div class="content_quote">
        <p><?php echo $quote; ?></p>
        <p id="autor"><?php echo $autor; ?></p>
    </div>
</section>