<?php

namespace PageBundle\Service;
use PageBundle\Entity\Ingredients;
use PageBundle\Utility\CSVArray;

/**
 * Created by PhpStorm.
 * User: tauvray
 * Date: 8/31/17
 * Time: 4:11 PM
 */
class csvService extends CSVArray
{
    protected $em;
    protected $path;

    public function __construct(\Doctrine\ORM\EntityManager $em, $path_kernel)
    {
        $this->em = $em;
        $this->path = $path_kernel;
        parent::__construct();
    }

    public function populateDatabase()
    {
        $fullPath= $this->path . '/Table_Ciqual_2016.csv';
        // Check if file exist and the right to read
        $fd = fopen($fullPath, 'r');
        if (!$fd)
            return false;
        fclose($fd);

        $data = array_map(
            function($v)
            {
                return str_getcsv($v, ";");
            }, file($fullPath));
        $i = 0;
        foreach($data as $val)
        {
            if ($i != 0)
            {
                $data = new Ingredients();
                foreach($val as $k => $v)
                {
                    $string = 'set'.ucfirst(array_keys($this->cleanArray)[$k]);

                    call_user_func_array(array($data, $string), array(trim(iconv("ISO-8859-1", "UTF-8", $v))));
                    $this->em->persist($data);
                }
            }
           $i++;
        }
        $this->em->flush();
    }
}
