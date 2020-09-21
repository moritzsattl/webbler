<?php

namespace App\Repository;

use App\Entity\Names;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Names|null find($id, $lockMode = null, $lockVersion = null)
 * @method Names|null findOneBy(array $criteria, array $orderBy = null)
 * @method Names[]    findAll()
 * @method Names[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NamesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Names::class);
    }

    // /**
    //  * @return Names[] Returns an array of Names objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Names
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
