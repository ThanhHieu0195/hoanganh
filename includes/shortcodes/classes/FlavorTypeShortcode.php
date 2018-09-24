<?php
namespace includes\shortcodes;

class FlavorTypeShortcode extends \includes\classes\Shortcode {
    public $shortcode = 'flavor-type';
    public $has_style = 1;
    public $attributes = [
        'post_id' => '',
        'style' => '1'
    ];
}