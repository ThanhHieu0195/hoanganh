<?php
get_header('bosevent');
$path_template_url = get_template_directory_uri();
global $post;
$page = $post;
?>
<?php
// render all file folder home
$dir_path = dirname(__FILE__);
foreach (glob($dir_path . "/research/*.php") as $filename)
{
    echo \includes\Bootstrap::bootstrap()->helper->render($filename, [
        'path_template_url' => $path_template_url,
        'page' => $page

    ]);
}
?>
<?php get_footer('bosevent'); ?>