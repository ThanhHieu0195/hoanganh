<?php
// generate fields
    $header_fields = [
        ACFCS::getImage(['name' => 'theme-setting-header-logo', 'label' => 'Logo']),
    ];

acf_add_local_field_group(array (
    'key' => 'theme-setting-header',
    'title' => 'Header',
    'fields' => $header_fields,
    'location' => array (
        array (
            array (
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-header',
            ),
        )
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
        0 => 'the_content',
    ),
    'active' => 1,
    'description' => '',
));

