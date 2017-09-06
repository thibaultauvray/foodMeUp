<?php

namespace PageBundle\Utility;
use PageBundle\Entity\Ingredients;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Created by PhpStorm.
 * User: tauvray
 * Date: 8/31/17
 * Time: 12:26 PM
 */

class csvUtility extends CSVArray
{

    /*
     * Just echo the mapping information for Copy / paste in entity
     */
    public function textEntity()
    {
        foreach($this->cleanArray as $key => $value)
        {
            echo "\n";
            echo "/**\n";
            echo "* @var $value \n";
            echo "* \n";
            echo "* @ORM\\Column(name=\"$key\", type=\"string\", length=255, nullable=true)\n";
            echo "*/\n";
            echo "private \$$key;\n";
            echo "\n";
        }
    }


}