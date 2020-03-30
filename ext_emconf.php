<?php

/**
 * Extension Manager/Repository config file for ext "testprojekt".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Testprojekt',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Navigate\\Testprojekt\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Marvin Wittmann',
    'author_email' => 'witt.marvin@web.de',
    'author_company' => 'Navigate',
    'version' => '1.0.0',
];
