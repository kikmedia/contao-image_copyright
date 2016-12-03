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
$GLOBALS['TL_DCA']['tl_module']['palettes']['ic_list'] =
'
    {title_legend},name,headline,type;
    {config_legend},imgSize;
    {template_legend:hide},customTpl;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID,space
';
