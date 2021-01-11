<?php

/**
 * Extension Manager/Repository config file for ext "htl3_sitepackage_sat".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'HTL 3 sitepackage sat',
    'description' => 'Example sitepackage for HTL3R',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Htl3r\\Htl3SitepackageSat\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Moritz Sattlegger',
    'author_email' => '6323@htl.rennweg.at',
    'author_company' => 'HTL3R',
    'version' => '1.0.0',
];
