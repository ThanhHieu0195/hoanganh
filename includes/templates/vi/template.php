<?php
get_header('bosevent');
$path_template_url = get_template_directory_uri();
global $post;
// render all file folder home
$dir_path = dirname(__FILE__);
$slug = \includes\Bootstrap::$bootstrap->hook->template;
foreach (glob($dir_path . "/{$slug}/*.php") as $filename)
{
    echo \includes\Bootstrap::bootstrap()->helper->render($filename, [
        'path_template_url' => $path_template_url,
        'page' => $post

    ]);
}
get_footer('bosevent');
