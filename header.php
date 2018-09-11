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
$custom_logo_id = get_theme_mod( 'custom_logo' );
$arr = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$logo_url = '';
if (!empty($arr)) {
	$logo_url = $arr[0];
}

$menus = wp_get_nav_menu_items('main');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header>
		<div class="sc-header-top">
			<div class="container">
				<div class="sc-header-top__left">
					<a class="sc-header-top__contact" href="#">
						<i class="far fa-envelope sc-header-top__contact__icon"></i>
						<span class="sc-header-top__contact__text">hello@hoanganh.com.vn</span>
					</a>
					<a class="sc-header-top__contact" href="#">
						<i class="fas fa-phone-volume sc-header-top__contact__icon"></i>
						<span class="sc-header-top__contact__text">(+1) 369-258-147</span>
					</a>
				</div>
				<div class="sc-header-top__right">
				<ul class="socials">
					<li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-pinterest-p"></i></a></li>
					<li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li class="socials__item"><a class="socials__link" href="#"><i class="fab fa-linkedin-in"></i></a></li>
				</ul>
				<ul class="recruitment">
					<li class="recruitment__item"><a class="recruitment__link" href="">Liên Hệ</a></li>
					<li class="recruitment__item"><a class="recruitment__link" href="">Tuyển Dụng</a></li>
				</ul>
			</div>
		</div>
		</div>
		<div class="sc-header">
		<nav class="navbar sc-header__navbar">
			<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle sc-header__berger" type="button" data-toggle="collapse" data-target="#menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand sc-header__logo" href="#">
					<img src="<?= $logo_url ?>" alt="">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav navbar-right sc-header__menu">
					<?php if (!empty($menus)): ?>
					<?php for($i=1; $i<count($menus); $i++): ?>
					<li><a href="<?= $menus[$i]->url ?>"><?= $menus[$i]->title ?></a></li>
					<?php endfor; ?>
					<?php endif; ?>
				</ul>
			</div>
			</div>
		</nav>
		</div>
	</header>
	<div id="content" class="site-content">
