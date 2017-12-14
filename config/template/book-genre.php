<?php

namespace Fulcrum\Tester;

return [
    'autoload' => true,
    'config'   => [
        'templateFolderPath' => dirname(dirname(__DIR__)) . '/src/Template/',
        'postType'           => 'book',
        'useSingle'          => true,
        'useArchive'         => true,
        'useTax'             => true,
        'taxonomy'           => 'genre',
        'usePageTemplates'   => true,
    ],
];
