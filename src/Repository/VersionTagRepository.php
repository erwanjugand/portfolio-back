<?php

namespace App\Repository;

use App\Entity\VersionTag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VersionTag|null find($id, $lockMode = null, $lockVersion = null)
 * @method VersionTag|null findOneBy(array $criteria, array $orderBy = null)
 * @method VersionTag[]    findAll()
 * @method VersionTag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VersionTagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VersionTag::class);
    }

    // /**
    //  * @return VersionTag[] Returns an array of VersionTag objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VersionTag
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
