<?php
// generate fields
    $footer_fields = [
        ACFCS::fieldTab(['name' => 'tab-footer-general', 'label' => 'General']),
        ACFCS::getText(['name' => 'footer-text-banner', 'label' => 'Text Banner']),
        ACFCS::getImage(['name' => 'footer-logo', 'label' => 'Background']),
        ACFCS::fieldTab(['name' => 'tab-footer-links', 'label' => 'Link']),
        ACFCS::getRepeater(['name' => 'footer-links', 'label' => 'Items', 'sub_fields' => [
            ACFCS::getText(['name' => 'text', 'label' => 'Text']),
            ACFCS::getText(['name' => 'link', 'label' => 'Link']),
        ]]),
        ACFCS::fieldTab(['name' => 'tab-video', 'label' => 'video']),
        ACFCS::getRepeater(['name' => 'footer-videos', 'label' => 'Items', 'sub_fields' => [
            ACFCS::getUrl(['name' => 'link', 'label' => 'link']),
            ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
        ]]),
    ];

acf_add_local_field_group(array (
    'key' => 'theme-setting-footer',
    'title' => 'Footer',
    'fields' => $footer_fields,
    'location' => array (
        array (
            array (
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-footer',
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

