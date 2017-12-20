<?php

namespace Fulcrum\Tester\Shortcode;

$rootPath = trailingslashit(dirname(dirname(__DIR__)));

return [
    'autoload'  => true,
    'classname' => __NAMESPACE__ . '\Book',
    'config'    => [
        'shortcode'                => 'books',
        'defaults'                 => [
            'genre'            => '',
            'number_books'     => 3,
            'orderby'          => 'title',
            'no_books_message' => __('Sorry, no books matched your criteria.', 'fulcrum'),
            'read_more'        => __('Continue reading', 'fulcrum'),
        ],
        'doShortcodeWithinContent' => false,
        'view'                     => $rootPath . 'src/Shortcode/views/books.php',
        'view_book'                => $rootPath . 'src/Shortcode/views/book.php',
        'view_genre'                => $rootPath . 'src/Shortcode/views/genre.php',

        'postType' => 'book',
        'taxonomy' => 'genre',
    ],
];
