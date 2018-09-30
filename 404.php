<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hoanganh
 */

get_header('404');
?>
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="title">404</h1>
						<h3 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'hoanganh' ); ?></h3>
					</header><!-- .page-header -->
					<div class="page-content">
						<div class="sc-button"><a class="main-color" href="" tabindex="0"><span>Về Trang Chủ</span></a></div>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php
get_footer('404');
