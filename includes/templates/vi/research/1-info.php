<div class="block-section">
    <div class="container">
       <?php
       $attr_str = "title='".get_field('info-title', $page->ID, '')."' ";
       $attr_str .= "description='".get_field('info-description', $page->ID, '')."' ";
       $bg = wp_get_attachment_image_url(get_field('info-bg', $page->ID, ''), 'full');
       $attr_str .= " bg='{$bg}' ";
       $attr_str .= " view='".get_field('info-url', $page->ID, '')."' ";
       $sc = "[team ${attr_str}/]";
       echo do_shortcode($sc);
       ?>
    </div>
</div>
