<?php
namespace includes\classes;

Class Constants {
    const TYPE_ONEPAGE = 'onepage';
    const MAX_PROJECT = 8;
    const MAX_POST = 9;

//    const DEFAULT_SLUG = 'hoanganh/';
    const DEFAULT_SLUG = CURRENT_THEME_PATH;

    const MAPP_TEMPLATE = [
        self::DEFAULT_SLUG  => 'home',
        self::DEFAULT_SLUG . 'home-2/'  => 'home',
        self::DEFAULT_SLUG  . 'about-us/' => 'about-us',
        self::DEFAULT_SLUG  . 'research/' => 'research',
        self::DEFAULT_SLUG  . 'insight/' => 'insight',
        self::DEFAULT_SLUG  . 'recruitment/' => 'recruitment',
        self::DEFAULT_SLUG  . 'contact/' => 'contact',
        self::DEFAULT_SLUG  . 'post-listing/' => 'post-listing',
        
          self::DEFAULT_SLUG .'vi/'  => 'home',
        self::DEFAULT_SLUG .'vi/'. 'home-2/'  => 'home',
        self::DEFAULT_SLUG  .'vi/'. 'about-us/' => 'about-us',
        self::DEFAULT_SLUG  .'vi/'. 'research/' => 'research',
        self::DEFAULT_SLUG  .'vi/'. 'insight/' => 'insight',
        self::DEFAULT_SLUG .'vi/' . 'recruitment/' => 'recruitment',
        self::DEFAULT_SLUG  .'vi/'. 'contact/' => 'contact',
        self::DEFAULT_SLUG  .'vi/'. 'post-listing/' => 'post-listing',

        self::DEFAULT_SLUG  .'vi/'. 've-chung-toi/' => 'about-us',
        self::DEFAULT_SLUG  .'vi/'. 'nghien-cuu/' => 'research',
        self::DEFAULT_SLUG  .'vi/'. 'xu-huong/' => 'insight',
        self::DEFAULT_SLUG .'vi/' . 'recruitment/' => 'recruitment',
        self::DEFAULT_SLUG  .'vi/'. 'lien-he/' => 'contact',
        self::DEFAULT_SLUG  .'vi/'. 'post-listing/' => 'post-listing',
    ];

    // app
    const CAPTCHA_SECRET = '6LfJA3MUAAAAAJ_HPOKYJqeN7qRvY-oOjJoIw6-I';
    const CAPTCHA_SITEKEY = '6LfJA3MUAAAAAMm-qlFmHfq0-uGD31eLBJyZ0Xr6';

}