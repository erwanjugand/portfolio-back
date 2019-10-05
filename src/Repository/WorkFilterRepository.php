<?php

namespace App\Repository;

use App\Entity\WorkFilter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method WorkFilter|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkFilter|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkFilter[]    findAll()
 * @method WorkFilter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkFilterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkFilter::class);
    }

    // /**
    //  * @return WorkFilter[] Returns an array of WorkFilter objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WorkFilter
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
