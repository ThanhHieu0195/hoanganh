<?php
$title = get_field('team1_title', $page_id, '');
$description = get_field('team1_description', $page_id, '');
$background = wp_get_attachment_image_url(get_field('team1_background', $page_id, ''), 'full', '');
$btn_path = get_field('team1_view_more', $page_id, '');

$bg_top = wp_get_attachment_image_url(get_field('teams_bg_top', $page_id, ''), 'full');
$bg_bottom = wp_get_attachment_image_url(get_field('teams_bg_bottom', $page_id, ''), 'full');
$bg_right = wp_get_attachment_image_url(get_field('teams_bg_right', $page_id, ''), 'full');
$bg_left = wp_get_attachment_image_url(get_field('teams_bg_left', $page_id, ''), 'full');
?>
<div class="sc-team-block layout-2">
    <div id="parallax">
        <div class="layer" data-depth="0.1">
            <div class="block-item top-left"><img src="<?= $bg_left ?>" alt=""></div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-item bottom-left"><img src="<?= $bg_bottom ?>" alt=""></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <div class="sc-team-block__block-image"><img src="<?= $background ?>" alt=""></div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="sc-team-block__block-content">
                        <div class="sc-main-title sc-team-block__title"><?= $title ?></div>
                        <div class="sc-team-block__description">
                            <?= $description ?>
                        </div>
                        <div class="sc-button sc-team-block__btn"><a class="main-color" href="<?= esc_url($btn_path) ?>"><span><?= translate_i18n('xem thêm') ?></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layer" data-depth="0.1">
          <div class="block-item top-right"><img src="<?= $bg_top ?>" alt=""></div>
        </div>
        <div class="layer" data-depth="0.1">
          <div class="block-item bottom-right"><img src="<?= $bg_right ?>" alt=""></div>
        </div>
    </div>
</div>