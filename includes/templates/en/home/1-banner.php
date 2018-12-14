<?php
// $page
$page_id = $page->ID;
$slider = get_field('slider', $page->ID, []);
$type = get_field('banner_type', $page->ID, 0);
if ($type == 0):
    $title = get_field('slider_video_title', $page_id, '');
    $subtitle = get_field('slider_video_subtitle', $page_id, '');
    $video_url = get_field('slider_video', $page_id, '');
    ?>
    <div class="sc-slider-video slider">
        <div class="border"></div>
        <div class="textbox">
            <button onclick="playPause(); return false;"> <i class="fas fa-play"></i></button>
            <h3><?= $subtitle ?></h3>
            <div class="big-title"><?= $title ?></div>
        </div>
        <video class="video-js vjs-default-skin" id="my_video_1" preload="none" width="100%" height="700px" data-setup="{}" poster="assets/images/slider/Slider_Hero_Video.png">
            <source src="<?= $video_url ?>" type="video/mp4">
        </video>
    </div>
<?php else: ?>
    <div class="banner-slider">
        <?php foreach ($slider as $item): ?>
            <?php
            $title = $item['field_5b93770f3af28'];
            $description = $item['field_5b93771d3af29'];
            $bg_url = wp_get_attachment_image_url($item['field_5b9377573af2b'], 'full');
            $more_url = $item['field_5b93772a3af2a'];
            ?>
            <div class="slider slider-01">
                <div class="img"><img src="<?= esc_url($bg_url) ?>" alt=""></div>
                <div class="textbox">
                    <?= $title ?>
                    <div class="description"><?= $description ?></div>
                    <div class="sc-button"><a class="main-color" href="<?= esc_url($more_url) ?>"><span><?= translate_i18n('Xem Thêm') ?></span></a></div>
                    <!-- <div class="sc-button"><a class="transparent" href="#"><span><?= translate_i18n('xu hướng mới') ?></span></a></div> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
