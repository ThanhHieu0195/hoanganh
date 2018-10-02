<?php
namespace includes\classes;

Class Constants {
	const TYPE_ONEPAGE = 'onepage';
	const MAX_PROJECT = 8;
	const MAX_POST = 9;

//	 const DEFAULT_SLUG = 'hoanganh/';
	 const DEFAULT_SLUG = '~simplet1/hoanganh/';

    const MAPP_TEMPLATE = [
        self::DEFAULT_SLUG  => 'home',
        self::DEFAULT_SLUG . 'home-2/'  => 'home',
        self::DEFAULT_SLUG  . 'about-us/' => 'about-us',
//        self::DEFAULT_SLUG  . 'flavors/' => 'flavors',
        self::DEFAULT_SLUG  . 'research/' => 'research',
        self::DEFAULT_SLUG  . 'insight/' => 'insight',
        self::DEFAULT_SLUG  . 'recruitment/' => 'recruitment',
        self::DEFAULT_SLUG  . 'contact/' => 'contact',
        self::DEFAULT_SLUG  . 'post-listing/' => 'post-listing',
//        self::DEFAULT_SLUG  . 'technology-listing/' => 'technology-listing',

        // self::DEFAULT_SLUG . 'en/' => 'home',
    ];

    // app
    const CAPTCHA_SECRET = '6LfJA3MUAAAAAJ_HPOKYJqeN7qRvY-oOjJoIw6-I';
    const CAPTCHA_SITEKEY = '6LfJA3MUAAAAAMm-qlFmHfq0-uGD31eLBJyZ0Xr6';

}
