<div class="session-banner sc-about-page" style="background-image: url(<?= $banner_bg_url ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-equal">
                <div class="sc-main-title sc-main-title--big">
                    <div class="sc-main-title--big__text">
                        <?= get_the_title() ?>
                    </div>
                    <div class="sc-main-title--big__icon"></div>
                </div>
            </div>
            <div class="col-md-4 col-equal">
                <div class="sc-quote">
                   <?= $banner_content ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
\includes\Bootstrap::bootstrap()->helper->get_breadcrumb();
?>
