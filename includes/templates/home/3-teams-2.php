<?php
$page_id = $page->ID;
$dir_path = \includes\Bootstrap::getPath();
?>
<?=  \includes\Bootstrap::bootstrap()->helper->render($dir_path . '/templates/teams/block1.php', ['page_id' => $page_id]); ?>
