<?php

namespace PageBundle\Repository;

/**
 * IngredientsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class IngredientsRepository extends \Doctrine\ORM\EntityRepository
{

    public function searchByName($name, $exact)
    {

        if ($exact)
        {
            return $this->createQueryBuilder('i')
                ->leftJoin('i.image', 'img')
                ->where('i.name = :name')
                ->setParameter('name', $name)
                ->getQuery()
                ->getResult();
        }
        return $this->createQueryBuilder('i')
            ->leftJoin('i.image', 'img')
            ->where('i.name LIKE :name')
            ->setParameter('name', '%'.$name.'%')
            ->getQuery()
            ->getResult();
    }

    public function findPaginate($itemPerPage, $nbPage)
    {
        $offset = $itemPerPage * ($nbPage - 1);
        return $this->createQueryBuilder('i')
            ->leftJoin('i.image', 'img')
            ->setMaxResults( $itemPerPage )
            ->setFirstResult( $offset )
            ->getQuery()
            ->getResult();
    }

    public function getNbIngredients()
    {
        return $this->createQueryBuilder('l')
                ->select('COUNT(l)')
                ->getQuery()
                ->getSingleScalarResult();

    }
}
