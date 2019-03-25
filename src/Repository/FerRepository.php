<?php

namespace App\Repository;

use App\Entity\Fer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fer[]    findAll()
 * @method Fer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fer::class);
    }

    // /**
    //  * @return Fer[] Returns an array of Fer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fer
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
