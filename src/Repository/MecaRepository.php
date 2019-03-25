<?php

namespace App\Repository;

use App\Entity\Meca;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Meca|null find($id, $lockMode = null, $lockVersion = null)
 * @method Meca|null findOneBy(array $criteria, array $orderBy = null)
 * @method Meca[]    findAll()
 * @method Meca[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MecaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Meca::class);
    }

    // /**
    //  * @return Meca[] Returns an array of Meca objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Meca
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
