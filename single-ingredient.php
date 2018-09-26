<?php
get_header();
?>
    <div class="block-content">
        <?=  \includes\Bootstrap::bootstrap()
            ->helper->render(\includes\Bootstrap::bootstrap()->helper->getPathSingle('ingredient/introduce'),
                ['page_id' => get_the_ID()]
            );
        ?>

        <?=  \includes\Bootstrap::bootstrap()
            ->helper->render(\includes\Bootstrap::bootstrap()->helper->getPathSingle('flavor/groups'),
                ['page_id' => get_the_ID()]
            );
        ?>
    </div>
<?php get_footer(); ?>  