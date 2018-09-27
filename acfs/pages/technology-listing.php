<?php
// generate fields


$tech_fields = array(
    ACFCS::getRepeater(['name' => 'tech-list', 'label' => 'Technology List', 'sub_fields' => [
        ACFCS::getText(['name' => 'title', 'label' => 'Title']),
        ACFCS::getAreaText(['name' => 'desc', 'label' => 'Content']),
        ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
        ACFCS::getUrl(['name' => 'view_url', 'label' => 'Url']),
    ]]),
);

acf_add_local_field_group(array (
    'key' => 'group_technology-listing',
    'title' => 'Technology Listing',
    'fields' => $tech_fields,
    'location' => array (
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-listing.php',
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
