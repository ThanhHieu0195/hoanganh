<?php
// generate fields

$video_fields = [
    ACFCS::getUrl([
        'name' => 'url',
        'label' => 'File'
    ]),
     ACFCS::getImage([
        'name' => 'ig-small',
        'label' => 'Thumbnail Small'
    ]),
];

acf_add_local_field_group(array (
    'key' => 'group_porttype_video',
    'title' => 'video',
    'fields' => $video_fields,
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'videos',
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
