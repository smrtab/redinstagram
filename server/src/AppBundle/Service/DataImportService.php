<?php
/**
 * Created by PhpStorm.
 * User: borisov
 * Date: 27.12.2017
 * Time: 13:52
 */

namespace AppBundle\Service;


class DataImportService
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }
}