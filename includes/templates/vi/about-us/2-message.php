<?php
$bg_url = wp_get_attachment_image_url(get_field('message-bg', $page->ID, ''), 'full');
?>
<div class="container">
    <div class="sc-team-block sc-team-block--founder">
        <div class="sc-main-title sc-main-title--left"><?= get_field('message-title', $page->ID, '') ?></div>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="sc-team-block__block-content">
                    <?= get_field('message-description', $page->ID, '') ?>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="sc-team-block__right">
                    <div class="sc-team-block__block-image"><img src="<?= $bg_url ?>" alt=""></div>
                    <div class="sc-team-block__block-author">
                        <span class="sc-team-block__author">
                            <?= get_field('message-author', $page->ID, '') ?>
                        </span>
                        <span class="separate">|</span>
                        <span class="sc-team-block__position">
                            <?= get_field('message-pos', $page->ID, '') ?>
                        </span></div>
                </div>
            </div>
        </div>
    </div>
</div>
