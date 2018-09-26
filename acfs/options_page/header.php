<?php
// generate fields
    $header_fields = [
        ACFCS::getText(['name' => 'theme-setting-header-email', 'label' => 'Email']),
        ACFCS::getText(['name' => 'theme-setting-header-phone', 'label' => 'Phone']),
        ACFCS::getText(['name' => 'theme-setting-header-fb', 'label' => 'facebook']),
        ACFCS::getText(['name' => 'theme-setting-header-tw', 'label' => 'Twitter']),
        ACFCS::getText(['name' => 'theme-setting-header-pin', 'label' => 'Pinterest']),
        ACFCS::getText(['name' => 'theme-setting-header-go', 'label' => 'Google']),
        ACFCS::getText(['name' => 'theme-setting-header-in', 'label' => 'LinkedIn']),
        ACFCS::getImage(['name' => 'theme-setting-header-logo', 'label' => 'Logo']),
    ];

$page = get_page_by_path('about-us');
if (!empty($page)) {
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
}
