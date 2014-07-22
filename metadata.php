<?php

/**
 * Version:    1.0
 * Author:     Alfred Bez <alfred.bez@gmail.com>
 * Author URI: http://www.alfredbez.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'ab_htmlmin',
    'title'        => 'Alfred Bez :: HTML minify',
    'description'  => 'entfernt unnötige Whitespaces aus dem HTML-Code',
    'version'      => '1.0',
    'author'       => 'Alfred Bez',
    'url'          => 'http://www.alfredbez.de',
    'email'        => 'alfred.bez@gmail.com',
    'extend'       => array(
        'oxutilsview'  => 'ab_htmlmin/models/ab_htmlmin'
    )
);
