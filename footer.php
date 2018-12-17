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
// $videos = get_field('footer-videos', 'option', []);
 $videos = get_posts(array(
        'post_type' => 'videos',
        'numberposts' => 6,
    ));

$bg_url = '';
$img_field = get_field('field-footer-bg', 'option', []);
if (!empty($img_field)){
    $bg_url=wp_get_attachment_url($img_field);
}
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

      <div class="footer-main" style="background:url(<?= $bg_url ?>)">
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
                  <?php foreach ($videos as $video): 
                      $img = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEXp7vG6vsG3u77s8fTCxsnn7O/f5OfP09bFyczM0dO8wMPk6ezY3eDh5unJzdDR1tlr0sxZAAACVUlEQVR4nO3b23KDIBRA0QgmsaLx//+2KmPi/YJMPafZ6619sOzARJjq7QYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAuJyN4+qMZcUri+BV3WQ22iIxSRTGFBITbRGpr218Ckx0EQPrxMfVPRP25QvNaT4xFTeJ1g/sJ4K8/aTuVxdNNJ99/Q0RQWlELtN7xGH9+8KYH1ZEX1hY770C9186Cm2R1TeONGj/paHQury7OwbsvzQUlp/9jakOJ2ooPLf/kl9on4Mtan50EhUUDvfgh8cqv/AxKlw+Cc3vPeUXjg+Kr4VCm+Vbl5LkeKHNTDKbKL9w3yr1B8q5RPmFu75puhPzTKKCwh13i2aJJguJ8gt33PG7GZxN1FC4tWvrB04TNRRu7Lw/S3Q2UUPh+ulpOIPTRB2FKyfgaeAoUUvhkvESnSYqL5ybwVGi7sKlwH6i6sL5JTpKVFZYlr0flmewTbyvX+piC8NyiXHvH9YD37OoqtA1v+wS15ZofxY1FTo/cJ+4NYNJd9BSVOi6kTeJOwLVFbrPyJ3dXqL6Cl1/7G7HDGordMOx7+hTVui2arQXBgVqKgwLVFQYGKinMDRQTWFwoJrC8AfcKLwUhRRSeL3vKkyDVaNLSdIf1snXEBQUyrlUTBQeIbPQD6uK8Zx3+yyHKbf/5N+y/gn78K/Rj/ZmY64Omhg9gHFaJu59i+EDGKf1/tshRxlxEoW+2uXS868EeflDYmDNltUzgkpqXyPGzULyK6QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8DV+AUrRI7QWHsWNAAAAAElFTkSuQmCC';
                      $arr_field = get_field('field-ig-small', $video->ID);
                      if (isset($arr_field['url'])) {
                          $img = $arr_field['url'];
                      }
                  ?>
                <li>
                    <a target="_blank" href="<?= get_field('field-url', $video->ID, '#') ?>"><img src="<?= $img ?>" alt=""></a>
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
</body>
</html>
