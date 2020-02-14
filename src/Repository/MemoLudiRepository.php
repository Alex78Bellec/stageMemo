<?php

namespace App\Repository;

use App\Entity\MemoLudi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MemoLudi|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemoLudi|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemoLudi[]    findAll()
 * @method MemoLudi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemoLudiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MemoLudi::class);
    }

    // /**
    //  * @return MemoLudi[] Returns an array of MemoLudi objects
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
    public function findOneBySomeField($value): ?MemoLudi
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
