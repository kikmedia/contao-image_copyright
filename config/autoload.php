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
 * Register namespace if loaded from extension repository
 */
if (class_exists('NamespaceClassLoader')) {
    NamespaceClassLoader::add('Tastaturberuf\ImageCopyright', 'system/modules/image_copyright/src');
}


/**
 * Register the templates
 */
TemplateLoader::addFiles([
    'mod_imagecopyright_list' => 'system/modules/image_copyright/templates/modules'
]);
