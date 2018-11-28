<?php

if( function_exists('acf_add_local_field_group') ):
    // home fields
    include 'acf.php';
    $dir_path = dirname(__FILE__);

    // page
    foreach (glob($dir_path . "/pages/*.php") as $filename) {
        include $filename;
    }
    // porttype
    foreach (glob($dir_path . "/porttypes/*.php") as $filename) {
        include $filename;
    }

    // pages_option
    foreach (glob($dir_path . "/options_page/*.php") as $filename) {
        include $filename;
    }
    
     acf_add_local_field_group(array (
        'key' => 'company_news',
        'title' => 'Company News',
        'fields' => [
            array (
            'key' => 'field_company_new',
            'label' => 'Company New',
            'name' => 'company_new',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                '1' => 'Show in company news'
            ),
            'allow_custom' => 0,
            'save_custom' => 0,
            'default_value' => array (
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
        ),
        ],
        'location' => array (
            array (
               array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ),
            )
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => 1,
        'description' => '',
    ));
endif;