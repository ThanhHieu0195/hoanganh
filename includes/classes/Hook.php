<?php
namespace includes\classes;
use includes\Bootstrap;
use includes\interfaces\HookInterface;

class Hook implements HookInterface{
    const VERSION = '1.0';
    public $template = '';
    public function init() {
        $this->registerAction();
        $this->registerFilter();
        $this->registerAsset();
        $this->registerShortcodes();
        $this->registerSetting();
    }

    public function registerAction() {
        // TODO: Implement registerAction() method.
        add_action('add_meta_boxes', [$this, 'addOtherOption']);
        add_action('wp_ajax_admin_ajax', [$this, 'excuteAjaxAdmin']);
        add_action('wp_ajax_front', [$this, 'excuteAjax']);
        add_action('wp_ajax_nopriv_front', [$this, 'excuteAjax']);
        add_action('init', [$this, 'registerTaxonomy']);
        add_action('init', [$this, 'registerPostType']);
        add_action('admin_menu', [$this, 'registerMenu']);
        add_filter( 'template_include', [$this, 'customTemplate']);
    }

    public function registerFilter() {
        // TODO: Implement registerFilter() method.
    }

    public function registerAsset() {
        add_action('wp_enqueue_scripts', [$this, 'addStyles']);
        add_action('wp_enqueue_scripts', [$this, 'addScripts']);
        add_action('admin_enqueue_scripts', [$this, 'addScriptsAdmin']);
    }

    public function addStyles() {
        $path = get_template_directory_uri();
        $styles = array(
            'bootstrap' => 'assets/lib/css/bootstrap.min.css',
            'slick' => 'assets/lib/js/slick/slick.css',
            'slick-theme' => 'assets/lib/js/slick/slick-theme.css',
            'popup-video' => 'assets/lib/css/magnific-popup.css',
            'hoanganh' => 'assets/css/style.css',
            'response' => 'assets/css/responsive.css',
            'component' => 'assets/css/component.css',
        );
        foreach ($styles as $style) {
            wp_enqueue_style($style, $path .'/'. $style, array(), self::VERSION);
        }
    }

    public function addScripts() {
        $path = get_template_directory_uri();
        $scripts = array(
            'jquery-3' => 'assets/lib/js/jquery-3.3.1.min.js',
            'bootstrap' => 'assets/lib/js/bootstrap.min.js',
            'slick' => 'assets/lib/js/slick/slick.min.js',
            'js-popup' => 'assets/lib/js/jquery.magnific-popup.min.js',
            'parallax' => 'assets/js/parallax.js',
            'hoanganh' => 'assets/js/main.js',
            'banner-slider' => 'assets/js/banner-slider.js',
            'couter' => 'assets/js/counter.js',
            'play-video' => 'assets/js/play-video.js',
            'post-carousel-layout-2' => 'assets/js/post-carousel-layout-2.js',
            'post-carousel' => 'assets/js/post-carousel.js',
            'team-parallax' => 'assets/js/team-parallax.js',
            'jquery-matchHeight' => 'assets/lib/js/jquery-matchHeight.js',
            'language' => 'assets/js/language.js'
        );
        foreach ($scripts as $script) {
            wp_enqueue_script($script, $path .'/'. $script, array('jquery'), self::VERSION, true);
        }
    }

    public function addScriptsAdmin() {
        $path = get_template_directory_uri();
        $scripts = array(
            'admin-js' =>'assets/js/admin.js',
        );
        foreach ($scripts as $script) {
            wp_enqueue_script($script, $path .'/'. $script, array('jquery'), self::VERSION, true);
        }
    }

    public function addOtherOption() {
        add_meta_box(
            'other-option', // id, used as the html id att
            __( 'Options Other' ), // meta box title, like "Page Attributes"
            [$this, 'renderOtherOption'], // callback function, spits out the content
            'page', // post type or page. We'll add this to pages only
            'side', // context (where on the screen
            'low' // priority, where should this go in the context?
        );
    }

    public function renderOtherOption() {
        $post_id = get_the_ID();
        $onepage = get_post_meta($post_id, 'type', true);
        $keyOnePage = \includes\classes\Constants::TYPE_ONEPAGE;
        ?>
        <select name="type" id="type">
            <option value=""> -- Default --</option>
            <option value="onepage" <?php echo $onepage==$keyOnePage ? 'selected' : '' ?>>-- One Page --</option>
        </select>
        <?php
    }

    public function excuteAjax() {
        if ( isset($_POST['method']) ) {
            switch ($_POST['method']) {
                case 'filterEvent':
                    $query_params = [];
                    if (isset($_POST['start'])) {
                        $start = date('Ymd', intval($_POST['start'])/1000);
                        $query_params[] =   array(
                            'key' => 'event_start',
                            'value' => $start,
                            'compare' => '>=',
                        );
                    }

                    if (isset($_POST['end'])) {
                        $end = date('Ymd', intval($_POST['end'])/1000);
                        $query_params[] =   array(
                            'key' => 'event_start',
                            'value' => $end,
                            'compare' => '<=',
                        );
                    }
                    $events = get_posts([
                        'post_type' => 'events',
                        'meta_query' => $query_params
                    ]);

                    if (!empty($events) && count($events) > 0) {
                        foreach ($events as $event){
                            $filename = \includes\Bootstrap::getPath() . '/templates/events/item.php';
                            echo \includes\Bootstrap::bootstrap()->helper->render($filename, [
                                'event' => $event
                            ]);
                        }
                    }
                    break;
            }
        }
        exit(200);
    }

    public function excuteAjaxAdmin() {
        if ( isset($_POST['step']) ) {
            switch ($_POST['step']) {
                case 'save_attributes_page':
                    $post_id = $_POST['post_id'];
                    $name = $_POST['name'];
                    $value = $_POST['value'];
                    echo update_post_meta($post_id, $name, $value);
                    break;

            }
        }
        exit(200);
    }

    public function registerPostType() {
        $dir_path = \includes\Bootstrap::getPath();
        foreach (glob($dir_path . "/posttypes/classes/*.php") as $filename)
        {
            $class_name = \includes\Bootstrap::bootstrap()->helper->getClassByPath($filename);
            /**
             * @var $model PostType
             */
            $class_name = '\\includes\\posttypes\\'.$class_name;
            $class_name::getInstance();
        }
    }

    public function registerTaxonomy() {
        $dir_path = \includes\Bootstrap::getPath();
        foreach (glob($dir_path . "/taxonomies/classes/*.php") as $filename)
        {
            $class_name = \includes\Bootstrap::bootstrap()->helper->getClassByPath($filename);
            /**
             * @var $class_name Taxonomy
             */
            $class_name = '\\includes\\taxonomies\\'.$class_name;
            $class_name::getInstance();
        }
    }

    public function registerMenu() {
    }

    public function customTemplate($template='') {
	    $mapping = \includes\classes\Constants::MAPP_TEMPLATE;
        $path = \includes\Bootstrap::getPath();
        $slug = \includes\Bootstrap::bootstrap()->helper->getSubUrl();

        if (array_key_exists($slug, $mapping)) {
            $slug = $mapping[$slug];

            $lang = Bootstrap::$bootstrap->language->lang;
            $path_file = $path . '/templates/' . $lang . '/template.php';
            if (file_exists($path_file)) {
                $template = $path_file;
                $this->template = $slug;
            }
        }
        return $template;
    }

    public function registerShortcodes() {
        $dir_path = \includes\Bootstrap::getPath();
        foreach (glob($dir_path . "/shortcodes/classes/*.php") as $filename)
        {
            $class_name = \includes\Bootstrap::bootstrap()->helper->getClassByPath($filename);
            /**
             * @var $model Shortcode
             */
            $class_name = '\\includes\\shortcodes\\'.$class_name;
            $model = new $class_name();
            $model->register();
        }
    }

    public function registerSetting() {
        if( function_exists('acf_add_options_page') ) {
            acf_add_options_page(array(
                'page_title' 	=> 'Theme General Settings',
                'menu_title'	=> 'Theme Settings',
                'menu_slug' 	=> 'theme-general-settings',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ));

            acf_add_options_sub_page(array(
                'page_title' 	=> 'Theme Header Settings',
                'menu_title'	=> 'Header',
                'parent_slug'	=> 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title' 	=> 'Theme Footer Settings',
                'menu_title'	=> 'Footer',
                'parent_slug'	=> 'theme-general-settings',
            ));

        }
    }
}