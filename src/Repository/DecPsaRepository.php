<?php

namespace App\Repository;

use App\Entity\DecPsa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DecPsa|null find($id, $lockMode = null, $lockVersion = null)
 * @method DecPsa|null findOneBy(array $criteria, array $orderBy = null)
 * @method DecPsa[]    findAll()
 * @method DecPsa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DecPsaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DecPsa::class);
    }

    // /**
    //  * @return DecPsa[] Returns an array of DecPsa objects
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
    public function findOneBySomeField($value): ?DecPsa
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
