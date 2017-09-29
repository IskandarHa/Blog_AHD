<?php

return [
    'home' => [
      'path' => '/',
      'controller' => include_once(__DIR__ . '/../src/controller/blog/homeController.php')
    ],
    'blogs' => [
        'path' => '/blogs',
        'controller' => include_once (__DIR__ .'/../src/controller/blog/blogsController.php')
    ],
    'details' => [
        'path' => '/details',
        'controller' => include_once (__DIR__ .'/../src/controller/blog/detailsController.php')
    ],
    'modify' => [
        'path' => '/modify',
        'controller' => include_once (__DIR__.'/../src/controller/blog/modifyController.php')
    ],
    'add' => [
        'path' => '/add',
        'controller' => include_once (__DIR__.'/../src/controller/blog/addController.php')
    ],
    'contact' => [
        'path' => '/contact',
        'controller' => include_once (__DIR__.'/../src/controller/blog/contactController.php')
    ]
];
