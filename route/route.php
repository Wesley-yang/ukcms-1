<?php

switch (DEFAULT_MODULE) {
    //index.php入口路由
    case 'home':
        Route::rule('/', 'home/index/index');
        Route::rule(':name/:id$', 'home/column/content')->pattern(['name' => '[a-zA-Z]+', 'id' => '\d+']);
        Route::rule('captcha/[:id]', "\\think\\captcha\\CaptchaController@index");
        Route::rule('search', 'home/index/search');
        Route::rule('<name>-?<condition?>$', 'home/column/index')->pattern(['name' => '[a-zA-Z]+', 'condition' => '[_]+']);
        Route::rule('<name>-?<page?>$', 'home/column/index')->pattern(['name' => '[a-zA-Z]+', 'page' => '\d+']);
        Route::rule('<name>-?<condition?>-?<page?>$', 'home/column/index')->pattern(['name' => '[a-zA-Z]+', 'condition' => '[0-9_&=a-zA-Z]+', 'page' => '\d+']);
        Route::rule('Sitemap.xml', 'home/Seo/Sitemap');
        Route::rule('single/index/<id>', 'home/single/index')->pattern(['id' => '\d+']);
        break;
}

