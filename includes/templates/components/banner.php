<?php 
$title = get_the_title();
if (is_single() && get_post_type( get_the_ID() ) == 'post') {
     $cat = get_the_category();
      $title = 'detail';
     if (!empty($cat)) {
         $title = $cat[0]->name;
     }
}
?>
<div class="session-banner sc-about-page" style="background-image: url(<?= $banner_bg_url ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-equal">
                <div class="sc-main-title sc-main-title--big">
                    <div class="sc-main-title--big__text">
                        <?= $title; ?>
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
