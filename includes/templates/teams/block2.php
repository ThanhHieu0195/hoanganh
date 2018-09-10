<?php
$title = get_field('team2_title', $page_id, '');
$description = get_field('team2_description', $page_id, '');
$background1 = wp_get_attachment_image_url(get_field('team2_background1', $page_id, ''), 'full', '');
$background2 = wp_get_attachment_image_url(get_field('team2_background2', $page_id, ''), 'full', '');
$btn_path = get_field('team2_view_more', $page_id, '');
?>
<div class="sc-team-block">
    <div class="sc-main-title sc-team-block__title"><?= $title ?></div>
    <div class="row">
        <div class="col-md-5">
            <div class="sc-team-block__description">
                <?= $description ?>
            </div>
            <div class="sc-team-block__group-btn">
                <div class="sc-button"><a class="main-color" href="<?= $btn_path ?>"><span><?= translate_i18n('xem thêm') ?></span></a></div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="sc-team-block__block-image"><img src="<?= $background1 ?>" alt=""></div>
        </div>
        <div class="col-md-3">
            <div class="sc-team-block__block-image"><img src="<?= $background2 ?>" alt=""></div>
        </div>
    </div>
</div>