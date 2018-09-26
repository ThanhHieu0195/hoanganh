<?php
// generate fields

$video_fields = [
    ACFCS::getText(['name' => 'field-name', 'label' => 'Name']),
    ACFCS::getText(['name' => 'field-email', 'label' => 'Email']),
    ACFCS::getAreaText(['name' => 'field-content', 'label' => 'Content']),
];

acf_add_local_field_group(array (
    'key' => 'group_porttype_contact',
    'title' => 'Contact',
    'fields' => $video_fields,
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'contact',
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
