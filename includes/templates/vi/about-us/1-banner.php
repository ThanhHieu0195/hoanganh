<?php
$bg_url = wp_get_attachment_image_url(get_field('banner-bg', $page->ID, ''), 'full');
?>
<div class="session-banner sc-about-page" style="background-image: url(<?= $bg_url ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-equal">
                <div class="sc-main-title sc-main-title--big"><?= get_field('banner-title', $page->ID, '') ?></div>
            </div>
            <div class="col-md-7 col-equal">
                <div class="sc-quote">
                    <div class="sc-quote__icon"></div>
                    <div class="sc-quote__content">
                        <div class="sc-quote__content__title"><?= get_field('banner-subtitle', $page->ID, '') ?></div>
                        <div class="sc-quote__content__des">
                            <?= get_field('banner-description', $page->ID, '') ?>
                        </div>
                    </div>
                    <div class="sc-quote__bottom">
                        <div class="sc-quote__bottom__author"><?= get_field('banner-author', $page->ID, '') ?></div>
                        <div class="sc-quote__bottom__position"><?= get_field('banner-pos', $page->ID, '') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
