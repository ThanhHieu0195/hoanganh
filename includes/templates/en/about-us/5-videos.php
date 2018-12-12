<?php
$items = get_posts(['post_type' => 'videos  ', 'numberposts' => 6]);
?>
<div class="container">
    <div class="block-section-lg">
        <div class="sc-main-title"><?= translate_i18n('video') ?></div>
        <div class="sc-video">
            <div class="row">
                <?php
                if (!empty($items)):
                foreach ($items as $video):
                    $url = get_field('url', $video->ID, '');
                    ?>
                <div class="col-md-4">
                    <div class="sc-video__item">
                        <div class="sc-video__item__image popup-youtube">
                            <img src="<?= get_the_post_thumbnail_url($video->ID) ?>" alt="">
                            <div class="sc-video__item__button-play">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="sc-video__item__content">
                            <?= $video->post_title ?>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                endif;?>
            </div>
        </div>
    </div>
</div>