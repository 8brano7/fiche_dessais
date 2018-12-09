<?php

namespace App\Repository;

use App\Entity\Zoznam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Zoznam|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zoznam|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zoznam[]    findAll()
 * @method Zoznam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZoznamRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Zoznam::class);
    }

    // /**
    //  * @return Zoznam[] Returns an array of Zoznam objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Zoznam
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
