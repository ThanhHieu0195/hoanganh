<?php

if( function_exists('acf_add_local_field_group') ):
    // home fields
    include 'acf.php';
    // page
    include 'pages/home.php';
    include 'pages/about-us.php';
    // porttype
    include 'porttypes/videos.php';

    // pages_option
    include 'options_page/header.php';

endif;