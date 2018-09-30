<div class="session-banner sc-about-page" style="background-image: url(<?= $banner_bg_url ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-equal">
                <div class="sc-main-title sc-main-title--big">
                    <div class="sc-main-title--big__text">
                        <?= get_the_title() ?>
                    </div>
                    <div class="sc-main-title--big__icon"></div>
                </div>
            </div>
            <div class="col-md-7 col-equal">
                <div class="sc-quote">
                    <div class="sc-quote__icon"></div>
                    <div class="sc-quote__content">
                        <div class="sc-quote__content__title"><?= $banner_subtitle ?></div>
                        <div class="sc-quote__content__des">
                            <?= $banner_description ?>
                        </div>
                    </div>
                    <div class="sc-quote__bottom">
                        <div class="sc-quote__bottom__author"><?= $banner_author ?></div>
                        <div class="sc-quote__bottom__position"><?= $banner_pos ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_breadcrumb(); ?>
