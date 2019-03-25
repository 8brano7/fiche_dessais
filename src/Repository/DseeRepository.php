<?php

namespace App\Repository;

use App\Entity\Dsee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dsee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dsee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dsee[]    findAll()
 * @method Dsee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DseeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dsee::class);
    }

    // /**
    //  * @return Dsee[] Returns an array of Dsee objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dsee
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
