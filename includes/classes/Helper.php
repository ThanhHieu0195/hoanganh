<?php

namespace includes\classes;

use includes\interfaces\HelperInterface;

class Helper implements HelperInterface {

    public function init() {
        // TODO: Implement init() method.
    }

    public function getPathTemplate($name) {
        return $template = \includes\Bootstrap::getPath() . '/templates/' . $name . '.php';
    }

    public function getPathSingle($name) {
        return $template = \includes\Bootstrap::getPath() . '/templates/singles/' . $name . '.php';
    }

    public function render( $_file_, $_params_ = [] ) {
        $_obInitialLevel_ = ob_get_level();
        ob_start();
        ob_implicit_flush( false );
        extract( $_params_, EXTR_OVERWRITE );
        try {
            include $_file_;
            $result = ob_get_clean();

            return $result;
        } catch ( \Exception $e ) {
            while ( ob_get_level() > $_obInitialLevel_ ) {
                if ( ! ob_end_clean() ) {
                    ob_clean();
                }
            }
            throw $e;
        } catch ( \Throwable $e ) {
            while ( ob_get_level() > $_obInitialLevel_ ) {
                if ( ! ob_end_clean() ) {
                    ob_clean();
                }
            }
            throw $e;
        }
    }

    public function minifyHtml($html) {
        return preg_replace(['/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'],['>','<','\\1'], $html);
    }

    public function checkOnePage($post_id='') {
        if ( empty($post_id) ) {
            $post_id = get_the_ID();
        }
        $type = get_post_meta($post_id, 'type', true);
        if ($type == \includes\classes\Constants::TYPE_ONEPAGE) {
            return true;
        }
        return false;
    }

    public function getCategory($post_id, $taxonomy) {
        $categories = get_the_terms( $post_id, $taxonomy);
        $cat = array();
        if ( !empty($categories) ) {
            $cat = $categories[0];
        }
        return $cat;
    }

    public function getSubUrl() {
        $request_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        preg_match('/\/(.*)$/', $request_url, $matches);
        $slug = '';
        if (count($matches) > 0) {
            $slug = $matches[1];
        }

        // remove query
        $matches = [];
        preg_match('/(.*)\?(.*)$/', $slug, $matches);;
        if (count($matches) > 0) {
            $slug = $matches[1];
        }

        return $slug;
    }

    public function slugToKey($slug) {
        $mapping = \includes\classes\Constants::SLUG_TO_KEY;
        if ( isset($mapping[$slug]) ) {
            $slug = $mapping[$slug];
        }
        return $slug;
    }

    public function getClassByPath($path) {
        preg_match('/\/([a-zA-Z0-9]*).php$/', $path, $matches);
        $class_name = '';
        if (count($matches) > 0) {
            $class_name = $matches[1];
        }
        return $class_name;
    }

    public function translate($text) {
        return $text;
    }

    public function getMenu($menus) {
        $arr_parents = [];
        $current_slug = $this->getSubUrl();
        for ($i=0; $i<count($menus); $i++) {
            $menu = $menus[$i];
            $class_avtive = '';
            if (!empty($current_slug) && $current_slug != CURRENT_THEME_PATH) {
                if (strpos($menu->url, $current_slug)) {
                    $class_avtive = 'active';
                }
            }

            echo '<li class="'.$class_avtive.'"><a href="' .$menu->url. '">' .$menu->title. '</a>';
            if ($i < count($menus)-1) {
                $menuNext = $menus[$i+1];

                if ($menuNext->menu_item_parent != 0 && !in_array($menuNext->menu_item_parent, $arr_parents)) {
                    $arr_parents[] = $menuNext->menu_item_parent;
                    echo '<ul class="sub-menu">';
                }

                $check_child = count($arr_parents) - array_search($menuNext->menu_item_parent, $arr_parents) - 1;
                while ( $check_child > 0||
                    ($menuNext->menu_item_parent == 0 && count($arr_parents) > 0)) {
                    echo '</ul>';
                    array_pop($arr_parents);
                }
            }
        }
    }

    public function getBanner() {
        if ( !is_front_page() && !is_page('home-2')) {
            $banner_image = '';
            $banner = get_field('theme-setting-header-banner', 'option');
            if ( !empty($banner) ) {
                $banner_image = $banner['url'];
            }

            $banner_url = $this->getPathTemplate('/components/banner');

            $banner_content_example = '  <div class="sc-quote__icon"></div>
                    <div class="sc-quote__content">
                        <div class="sc-quote__content__title">CHÚNG TÔI LÀ HOÀNG ANH</div>
                        <div class="sc-quote__content__des">
                            Với sự nhiệt huyết và niềm đam mê, chúng tôi hiểu làm thế nào để truyền cảm hứng cho mọi người tại Hoàng Anh, tạo môi trường làm việc chuyên nghiệp, và dẫn dắt công việc lên một tầm cao mới.
                        </div>
                    </div>
                    <div class="sc-quote__bottom">
                        <div class="sc-quote__bottom__author">DUY T. PHAM</div>
                        <div class="sc-quote__bottom__position">General Director</div>
                    </div>';

                $banner_content = get_field('fields_banner', get_the_ID(),$banner_content_example);

            echo \includes\Bootstrap::bootstrap()->helper->render($banner_url, [
                'banner_content' => $banner_content,
                'banner_bg_url' => $banner_image
            ]);
        }
    }

    public function get_breadcrumb() {
    ?>
    <div class="container">
        <nav class="breadcrumb-wapper">
            <ul class="breadcrumb">
                <?php
                echo '<li class="breadcrumb__item"><a class="breadcrumb__link" href="'.home_url().'">home</a></li>';
                if (is_category() || is_single()) {
                    $cat = get_the_category();
                    if (!empty($cat)) {
                        echo "<i class=\"fas fa-angle-right\"></i>";
                        echo '<li class="breadcrumb__item">
                                <a class="breadcrumb__link" href="'.home_url('insight').'">'.$cat[0]->name.'</a>
                                </li>';
                    }
                    if (is_single()) {
                        if ( is_singular(['flavor']) ) {
                            echo '<i class="fas fa-angle-right"></i>';
                            echo '<li class="breadcrumb__item">
                                <a class="breadcrumb__link" href="#">'.translate('hương thực phẩm').'</a>
                                </li>';
                        }

                        if ( is_singular(['ingredient']) ) {
                            echo '<i class="fas fa-angle-right"></i>';
                            echo '<li class="breadcrumb__item">
                                <a class="breadcrumb__link" href="#">'.translate('nguyên liệu thực phẩm').'</a>
                                </li>';
                        }

                        echo '<i class="fas fa-angle-right"></i>';
                        echo '<li class="breadcrumb__item active">
                                <a class="breadcrumb__link active" href="#">'.get_the_title().'</a>
                                </li>';
                    }
                } elseif (is_page()) {
                     if ( is_page_template('page-listing.php') ) {
                            echo '<i class="fas fa-angle-right"></i>';
                            echo '<li class="breadcrumb__item">
                                <a class="breadcrumb__link" href="#">'.translate('nghiên cứu').'</a>
                                </li>';
                        }
                        
                    echo '<i class="fas fa-angle-right"></i>';
                    echo '<li class="breadcrumb__item active">
                            <a class="breadcrumb__link active" href="#">'.get_the_title().'</a>
                           </li>';
                } elseif (is_search()) {
                    echo '<i class="fas fa-angle-right"></i>Search Results for... ';
                    echo '"<em>';
                    echo the_search_query();
                    echo '</em>"';
                }
                ?>
            </ul>
        </nav>
    </div>
    <?php
}
}