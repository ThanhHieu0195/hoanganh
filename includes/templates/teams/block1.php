<?php
$title = get_field('team1_title', $page_id, '');
$description = get_field('team1_description', $page_id, '');
$background = wp_get_attachment_image_url(get_field('team1_background', $page_id, ''), 'full', '');
$btn_path = get_field('team1_view_more', $page_id, '');
?>
<div class="sc-team-block">
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