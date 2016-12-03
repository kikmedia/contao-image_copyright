<?php

/**
 * image_copyright for Contao Open Source CMS
 *
 * @copyright   (c) 2016 Tastaturberuf <tastaturberuf.de>
 * @author      Daniel Jahnsmüller <code@tastaturberuf.de>
 * @license     LGPL3
 * @package     tastaturberuf/imagecopyright
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_files']['palettes']['default'] .= ';{image_copyright},ic_copyright,ic_enabled';


/**
 * Fields
 */
array_insert($GLOBALS['TL_DCA']['tl_files']['fields'], 0,
[
    'ic_copyright' =>
    [
        'label'     => &$GLOBALS['TL_LANG']['tl_files']['ic_copyright'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      =>
        [
            'maxlength' => 128
        ],
        'sql' => "varchar(128) NOT NULL default ''"
    ],
    'ic_enabled' =>
    [
        'label'     => &$GLOBALS['TL_LANG']['tl_files']['ic_enabled'],
        'exclude'   => true,
        'inputType' => 'checkbox',
        'sql'       => "char(1) NOT NULL default ''"
    ]
]);