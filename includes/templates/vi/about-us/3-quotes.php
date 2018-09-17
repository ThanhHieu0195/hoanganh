<?php
$bg_url1 = wp_get_attachment_image_url(get_field('quote1-bg', $page->ID, ''), 'full');
$bg_url2 = wp_get_attachment_image_url(get_field('quote2-bg', $page->ID, ''), 'full');
?>
<div class="block-section">
    <div class="sc-block-quote">
        <div class="sc-block-quote__left col-equal" style="background-image: url(<?= $bg_url1 ?>)">
            <div class="sc-block-quote__content">
                <div class="sc-block-quote__content__icon"></div>
                <div class="sc-block-quote__content__title"><?= get_field('quote1-title', $page->ID, '') ?></div>
                <div class="sc-block-quote__content__des"><?= get_field('quote1-description', $page->ID, '') ?></div>
            </div>
        </div>
        <div class="sc-block-quote__right col-equal" style="background-image: url(<?= $bg_url2   ?>)">
            <div class="sc-block-quote__content">
                <div class="sc-block-quote__content__icon"></div>
                <div class="sc-block-quote__content__title"><?= get_field('quote2-title', $page->ID, '') ?></div>
                <div class="sc-block-quote__content__des"><?= get_field('quote2-description', $page->ID, '') ?></div>
            </div>
        </div>
    </div>
</div>
