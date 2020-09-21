<?php

namespace App\Repository;

use App\Entity\TournamentEntry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TournamentEntry|null find($id, $lockMode = null, $lockVersion = null)
 * @method TournamentEntry|null findOneBy(array $criteria, array $orderBy = null)
 * @method TournamentEntry[]    findAll()
 * @method TournamentEntry[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TournamentEntryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TournamentEntry::class);
    }

    // /**
    //  * @return TournamentEntry[] Returns an array of TournamentEntry objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TournamentEntry
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
