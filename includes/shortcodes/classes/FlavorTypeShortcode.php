<?php
namespace includes\shortcodes;

class FlavorTypeShortcode extends \includes\classes\Shortcode {
    public $shortcode = 'flavor-type';
    public $has_style = 1;
    public $attributes = [
        'title' => '',
        'description' => '',
        'concepts' => [],
        'bg' => '',
        'style' => '1'
    ];

    public function customBeforeRender() {
        // take params concepts
        $i=0;
        $params = $this->params;
        while(isset($params['concept_' .$i .'_item'])) {
            $this->attributes['concepts'][] = $params['concept_' .$i .'_item'];
            $i++;
        }
    }
}