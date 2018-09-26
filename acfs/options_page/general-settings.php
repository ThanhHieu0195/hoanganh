<?php
// generate fields
$header_fields = [
    ACFCS::getText(['name' => 'theme-setting-email', 'label' => 'Email']),
    ACFCS::getText(['name' => 'theme-setting-phone', 'label' => 'Phone']),
    ACFCS::getText(['name' => 'theme-setting-address', 'label' => 'Address']),

    ACFCS::getText(['name' => 'theme-setting-fb', 'label' => 'facebook']),
    ACFCS::getText(['name' => 'theme-setting-tw', 'label' => 'Twitter']),
    ACFCS::getText(['name' => 'theme-setting-pin', 'label' => 'Pinterest']),
    ACFCS::getText(['name' => 'theme-setting-go', 'label' => 'Google']),
    ACFCS::getText(['name' => 'theme-setting-in', 'label' => 'LinkedIn']),
];

acf_add_local_field_group(array (
    'key' => 'theme-setting-general',
    'title' => 'Header',
    'fields' => $header_fields,
    'location' => array (
        array (
            array (
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'theme-general-settings',
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
