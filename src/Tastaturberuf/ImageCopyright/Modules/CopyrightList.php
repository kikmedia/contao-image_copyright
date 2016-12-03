<?php

/**
 * image_copyright for Contao Open Source CMS
 *
 * @copyright   (c) 2016 Tastaturberuf <tastaturberuf.de>
 * @author      Daniel Jahnsmüller <code@tastaturberuf.de>
 * @license     LGPL3
 * @package     tastaturberuf/imagecopyright
 */


namespace Tastaturberuf\ImageCopyright\Modules;


use Haste\Frontend\AbstractFrontendModule;


class CopyrightList extends AbstractFrontendModule
{

    /**
     * @var string
     */
    protected $strTemplate = 'mod_imagecopyright_list';


    protected function compile()
    {
        $arrFiles = [];
        $objFiles = \FilesModel::findBy('ic_enabled', 1);

        if ( $objFiles )
        {
            while ( $objFiles->next() )
            {
                $objImage = \Image::create($objFiles->path, deserialize($this->imgSize));

                $objFiles->src = $objImage->executeResize()->getResizedPath();

                $arrFiles[] = $objFiles->row();
            }
        }

        $this->Template->files = $arrFiles;
    }

}
