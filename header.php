<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoanganh
 */
$path_template_url = get_template_directory_uri();
$menus = wp_get_nav_menu_items('main');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
$logo_url = '';
$logo = get_field('theme-setting-header-logo', 'option');
if ( !empty($logo) ) {
    $logo_url = $logo['url'];
}
?>
<div id="page" class="site">
	<header>
        <div id="home_url" data-url="<?= get_home_url() ?>"></div>
        <div class="sc-header-top">
          <div class="container">

            <div class="sc-header-top__left">
                <a class="sc-header-top__contact" href="#">
                    <i class="far fa-envelope sc-header-top__contact__icon"></i>
                    <span class="sc-header-top__contact__text">
                        <?=get_field('theme-setting-email', 'option', '') ?></span>
                </a>
                <a class="sc-header-top__contact" href="#">
                    <i class="fas fa-phone-volume sc-header-top__contact__icon__phone"></i>
                    <span class="sc-header-top__contact__text">
                        <?= get_field('theme-setting-phone', 'option', '') ?>
                    </span>
                </a>
            </div>

            <div class="sc-header-top__right">
              <ul class="socials">
                <li class="socials__item"><a class="socials__link" href="<?= get_field('theme-setting-fb', 'option', '') ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li class="socials__item"><a class="socials__link" href="<?= get_field('theme-setting-tw', 'option', '') ?>"><i class="fab fa-twitter"></i></a></li>
                <li class="socials__item"><a class="socials__link" href="<?= get_field('theme-setting-pin', 'option', '') ?>"><i class="fab fa-pinterest-p"></i></a></li>
                <li class="socials__item"><a class="socials__link" href="<?= get_field('theme-setting-go', 'option', '') ?>"><i class="fab fa-google-plus-g"></i></a></li>
                <li class="socials__item"><a class="socials__link" href="<?= get_field('theme-setting-in', 'option', '') ?>"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
              <ul class="recruitment">
                <li class="recruitment__item"><a class="recruitment__link" href="<?= get_home_url() . '/contact' ?>"><?= translate_i18n('Liên Hệ') ?></a></li>
                  <li class="recruitment__item"><a class="recruitment__link" href="<?= get_home_url() . '/recruitment' ?>"><?= translate_i18n('Tuyển Dụng') ?></a></li>
                  <?php if (is_user_logged_in()): ?>
                  <li class="recruitment__item"><a class="recruitment__link" href="<?= get_home_url() . '/post-listing' ?>"><?= translate_i18n('Tin tức nội bộ') ?></a></li>
                <?php endif; ?>
                  <li class="recruitment__item__active flag"><a href="#" onclick="language.events.changeLanguage('en')"><img src="<?= $path_template_url ?>/assets/images/home/header_english_flag.png"><span>En</span></a></li>
                <li class="recruitment__item__active flag"><a href="#" onclick="language.events.changeLanguage('vi')"><img src="<?= $path_template_url ?>/assets/images/home/header_vietnam_flag.png"><span>Vi</span></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="sc-header">
          <header class="header-main-01">
            <div class="mainNav">
              <div class="fixed-menu">
                <div class="logo"><a href="<?= get_home_url() ?>"><img src="<?= $logo_url ?>" alt="logo"></a></div>
                <div class="main-header pc" id="menu">
                  <ul>
                      <?= \includes\Bootstrap::$bootstrap->helper->getMenu($menus); ?>
                  </ul>
                </div>

                <div class="categories">
                  <div class="slz-hamburger-menu">
                    <div class="bar"></div>
                  </div>
                </div>

                <div class="main-menu-mobile" id="menu">
                  <ul>
                      <?= \includes\Bootstrap::$bootstrap->helper->getMenu($menus) ?>
                    <li class="recruitment__item"><a class="recruitment__link" href="<?= get_home_url() . '/contact' ?>"><?= translate_i18n('Liên Hệ') ?></a></li>
                    <li class="recruitment__item"><a class="recruitment__link" href="<?= get_home_url() . '/recruitment' ?>"><?= translate_i18n('Tuyển Dụng') ?></a></li>
                    <?php if (is_user_logged_in()): ?>
                    <li class="recruitment__item"><a class="recruitment__link" href="<?= get_home_url() . '/post-listing' ?>"><?= translate_i18n('Tin tức nội bộ') ?></a></li>
                    <?php endif; ?>
                    <li class="recruitment__item__active flag"><a href="#" onclick="language.events.changeLanguage('en')"><img src="<?= $path_template_url ?>/assets/images/home/header_english_flag.png"><span>En</span></a></li>
                  <li class="recruitment__item__active flag"><a href="#" onclick="language.events.changeLanguage('vi')"><img src="<?= $path_template_url ?>/assets/images/home/header_vietnam_flag.png"><span>Vi</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </header>
        </div>
	</header>

	<div id="content" class="site-content">
        <?= \includes\Bootstrap::$bootstrap->helper->getBanner(); ?>

