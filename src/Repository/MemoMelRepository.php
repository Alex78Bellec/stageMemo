<?php

namespace App\Repository;

use App\Entity\MemoMel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MemoMel|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemoMel|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemoMel[]    findAll()
 * @method MemoMel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemoMelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MemoMel::class);
    }

    // /**
    //  * @return MemoMel[] Returns an array of MemoMel objects
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
    public function findOneBySomeField($value): ?MemoMel
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
