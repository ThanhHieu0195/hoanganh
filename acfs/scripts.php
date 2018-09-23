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

endif;