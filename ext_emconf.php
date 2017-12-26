<?php

/**
 * Extension Manager/Repository config file for ext "site_package_basics".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Package Basics',
    'description' => 'Typo3 site package basics - just demo',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HofUniversity\\SitePackageBasics\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lohith BE',
    'author_email' => 'lohith.byadarahalli.eswarappa@hof-university.de',
    'author_company' => 'hof-university',
    'version' => '1.0.0',
];
