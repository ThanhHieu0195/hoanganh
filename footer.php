<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoanganh
 */
$footer_icon_url = '';
$logo = get_field('footer-logo', 'option');
if ( !empty($logo) ) {
    $footer_icon_url = $logo['url'];
}

$links = get_field('footer-links', 'option', []);
$videos = get_field('footer-videos', 'option', []);
?>

	</div><!-- #content -->

	<div class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <?= get_field('footer-text-banner', 'option', '') ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form">
                <input class="input" type="text" placeholder="<?= translate_i18n('Nhập email của bạn') ?>">
                <button type="button"><?= translate_i18n('Gửi ĐI') ?></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-main">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12"><a href="#"><img src="<?= $footer_icon_url ?>" alt=""></a>
              <ul class="socials">
                  <li class="socials__item"><a target="_blank" class="socials__link" href="<?= get_field('theme-setting-fb', 'option', '') ?>"><i class="fab fa-facebook-f"></i></a></li>
                  <!-- <li class="socials__item"><a target="_blank" class="socials__link" href="<?= get_field('theme-setting-tw', 'option', '') ?>"><i class="fab fa-twitter"></i></a></li>
                  <li class="socials__item"><a target="_blank" class="socials__link" href="<?= get_field('theme-setting-pin', 'option', '') ?>"><i class="fab fa-pinterest-p"></i></a></li>
                  <li class="socials__item"><a target="_blank" class="socials__link" href="<?= get_field('theme-setting-go', 'option', '') ?>"><i class="fab fa-google-plus-g"></i></a></li> -->
                  <li class="socials__item"><a class="socials__link" href="<?= get_field('theme-setting-in', 'option', '') ?>"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h4><?= translate_i18n('Liên Hệ') ?></h4>
              <ul class="infomation">
                <li>
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <a target="_blank" href="<?= get_field('theme-setting-address-link', 'option', '') ?>"><?= get_field('theme-setting-address', 'option', '') ?></a>
                </li>
                <li>
                    <span><i class="fas fa-phone"></i></span>
                    <a href="#"><?= get_field('theme-setting-phone', 'option', '') ?></a>
                </li>
                <li>
                    <span><i class="fas fa-envelope"></i></span>
                    <a href="#"><?= get_field('theme-setting-email', 'option', '') ?></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h4><?= translate_i18n('Liên Kết Hữu Ích') ?></h4>
              <ul class="link">
                  <?php foreach ($links as $link): ?>
                <li><a href="<?= $link['field-link'] ?>"><?= $link['field-text'] ?></a></li>
                  <?php endforeach; ?>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h4><?= translate_i18n('Videos') ?></h4>
              <ul class="list-video">
                  <?php foreach ($videos as $video): ?>
                <li>
                    <a target="_blank" href="<?= $video['field-link'] ?>"><img src="<?= wp_get_attachment_image_url($video['field-bg'], 'full') ?>" alt=""></a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">All Rights Reserved © Designed by Hoang Anh Flavor and Ingredient</div>
    </div>
</div><!-- #page -->,

<?php wp_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= KEY_MAP ?>&amp;callback=myMap"></script>

</body>
</html>
