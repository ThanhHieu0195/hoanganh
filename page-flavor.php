<?php /* Template Name: flavor page */
use includes\Bootstrap;

get_header();
$path_template_url = get_template_directory_uri();
$page = get_page(get_the_ID());
// render all file folder home
$dir_path = dirname(__FILE__);
$slug = \includes\Bootstrap::$bootstrap->hook->template;
$lang = Bootstrap::$bootstrap->language->lang;
foreach (glob($dir_path . "/includes/templates/{$lang}/flavors/*.php") as $filename)
{
    echo \includes\Bootstrap::bootstrap()->helper->render($filename, [
        'path_template_url' => $path_template_url,
        'page' => $page

    ]);
}
get_footer();
