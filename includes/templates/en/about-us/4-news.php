 <?php 
 $title = get_field('news-title', $page->ID, '');
 $number = get_field('news-number', $page->ID, 3);
 ?>
 <?= do_shortcode('[post-carousel type="company_news" title="' . $title . '" number="' . $number . '" /]') ?>