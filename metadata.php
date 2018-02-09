<?php

/**
 * Version:    2.0
 * Author:     Alfred Bez <alfred.bez@gmail.com>
 * Author URI: http://www.alfredbez.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2';

/**
 * Module information
 */
$aModule = [
    'id'          => 'ab_htmlmin',
    'title'       => 'Alfred Bez :: HTML minify',
    'description' => 'entfernt unnötige Whitespaces aus dem HTML-Code',
    'version'     => '2.0',
    'author'      => 'Alfred Bez',
    'url'         => 'http://www.alfredbez.de',
    'email'       => 'alfred.bez@gmail.com',
    'extend'      => [
        \OxidEsales\Eshop\Core\UtilsView::class => \AlfredBez\HtmlMin\Core\UtilsView::class,
    ],
];
