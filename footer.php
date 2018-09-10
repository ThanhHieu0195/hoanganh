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
$footer_icon_url = get_option('footer_icon', '');
?>

	</div><!-- #content -->

	<div class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="title">Subscribe for <span>Hoang Anh</span> viewpoints!</div>
              <div class="description">Get a weekly email of our pros' current thinking about flavor and ingredient that you need</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form">
                <input class="input" type="text" placeholder="Nhập email của bạn">
                <button type="button">Gửi ĐI</button>
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
                <li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h4>Liên Hệ</h4>
              <ul class="infomation">
                <li> <span><i class="fas fa-map-marker-alt"></i></span><span>134A Le Van Luong Str., Phuoc Kien Commune, Nha Be District, Ho Chi Minh City, Vietnam.</span></li>
                <li><span><i class="fas fa-phone"></i></span><span>
                    <p>+84 (0)28 3781 7030</p>
                    <p>+84 (0)28 3781</p></span></li>
                <li> <span><i class="fas fa-envelope"></i></span><a href="#">info@hoanganh.com.vn</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h4>Liên Kết Hữu Ích</h4>
              <ul class="link">
                <li><a href="#">Tin Tức Nội</a></li>
                <li><a href="#">Hương Liệu</a></li>
                <li><a href="#">Nguyên Liệu</a></li>
                <li><a href="#">Tin Tức Về Hoàng Anh</a></li>
                <li><a href="#">Xu Hướng</a></li>
                <li><a href="#">Nghiên Cứu</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h4>Video</h4>
              <ul class="list-video">
                <li><img src="<?=  get_template_directory_uri() ?>/assets/images/footer/footer_01.png" alt=""></li>
                <li><img src="<?=  get_template_directory_uri() ?>/assets/images/footer/footer_02.png" alt=""></li>
                <li><img src="<?=  get_template_directory_uri() ?>/assets/images/footer/footer_03.png" alt=""></li>
                <li><img src="<?=  get_template_directory_uri() ?>/assets/images/footer/footer_04.png" alt=""></li>
                <li><img src="<?=  get_template_directory_uri() ?>/assets/images/footer/footer_05.png" alt=""></li>
                <li><img src="<?=  get_template_directory_uri() ?>/assets/images/footer/footer_06.png" alt=""></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">All Rights Reserved © Designed by Hoang Anh Flavor and Ingredient</div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
