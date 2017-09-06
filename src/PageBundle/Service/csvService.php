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

    /*
     * This things can occurs Memory size limit and i can't touch PHP.ini on 42's mac.
     * Solution is Docker or a more optimized filler data or just data fixtures ?
     */
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

                    call_user_func_array(array($data, $string), array(trim(utf8_decode($v))));
                    $this->em->persist($data);
                }
                /*
                 * This things don't below here but after the foreach but i cant change the php.ini so.
                 * Solutions : Put on a Docker @TODO
                 */
//                $this->em->flush();

            }
           $i++;
        }
        /*
         * HERE IS BETTER
        */
        $this->em->flush();
    }
}