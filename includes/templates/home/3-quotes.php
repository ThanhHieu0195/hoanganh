<?php
$page_id = $page->ID;
$title1 = get_field('quote_title1', $page_id, '');
$title2 = get_field('quote_title2', $page_id, '');
$description1 = get_field('quote_description1', $page_id, '');
$description2 = get_field('quote_description2', $page_id, '');
$viewmore1 = get_field('quote_viewmore1', $page_id, '');
$viewmore2 = get_field('quote_viewmore2', $page_id, '');
?>
<div class="sc-banner sc-banner--left">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="sc-banner__wrapper">
                    <div class="sc-banner__content">
                        <div class="sc-banner__content__title"><?= $title1 ?></div>
                        <div class="sc-banner__content__des">
                            <?= $description1 ?>
                        </div>
                        <div class="sc-button sc-banner__content__button">
                            <a class="text-sub-color" href="<?= esc_url($viewmore1) ?>">
                                <span><?= translate_i18n('xem thêm') ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
</div>
<div class="sc-banner sc-banner--right">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div class="sc-banner__wrapper">
                    <div class="sc-banner__content">
                        <div class="sc-banner__content__title"><?= $title2 ?></div>
                        <div class="sc-banner__content__des">
                            <?= $description2 ?>
                        </div>
                        <div class="sc-button sc-banner__content__button">
                            <a class="text-sub-color" href="<?= esc_url($viewmore1) ?>">
                                <span><?= translate_i18n('xem thêm') ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>