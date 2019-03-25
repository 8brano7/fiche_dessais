<?php

namespace App\Repository;

use App\Entity\Cmon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cmon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cmon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cmon[]    findAll()
 * @method Cmon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CmonRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cmon::class);
    }

    // /**
    //  * @return Cmon[] Returns an array of Cmon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cmon
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
