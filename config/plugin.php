<?php

namespace Fulcrum\Tester;

return [

    /****************************
     * Post Types / Rewrite
     ****************************/

    'post_Types' => [
        'foo' => 'foo',
    ],

    'pluginActivationKeys' => [
        'postType.foo',
        'taxonomy.bar',
    ],

    /****************************
     * Service Providers
     ****************************/

    'serviceProviders' => [

        /****************************
         * Post Types
         ****************************/
        'postType.book'  => [
            'provider' => 'provider.postType',
            'config'   => __DIR__ . '/post-type/book.php',
        ],

        /****************************
         * Taxonomy
         ****************************/
        'taxonomy.genre' => [
            'provider' => 'provider.taxonomy',
            'config'   => __DIR__ . '/taxonomy/genre.php',
        ],

        /****************************
         * Templates
         ****************************/
        'template.book'   => [
            'provider' => 'provider.template',
            'config'   => __DIR__ . '/template/book-genre.php',
        ],
        'adminTemplate.foo'   => [
            'provider' => 'provider.adminTemplate',
            'config'   => __DIR__ . '/template/page-templates.php',
        ],
    ],
];
