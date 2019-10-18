<?php

namespace App\Repository;

use App\Entity\TaGenTramosPuntos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TaGenTramosPuntos|null find($id, $lockMode = null, $lockVersion = null)
 * @method TaGenTramosPuntos|null findOneBy(array $criteria, array $orderBy = null)
 * @method TaGenTramosPuntos[] findAll()
 * @method TaGenTramosPuntos[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaGenTramosPuntosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TaGenTramosPuntos::class);
    }

// /**
// * @return TaEstEmpresas[] Returns an array of TaEstEmpresas objects
// */
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
    public function findOneBySomeField($value): ?TaEstEmpresas
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


