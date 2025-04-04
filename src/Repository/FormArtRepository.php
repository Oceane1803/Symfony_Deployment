<?php

namespace App\Repository;

use App\Entity\FormArt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FormArt>
 *
 * @method FormArt|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormArt|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormArt[]    findAll()
 * @method FormArt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormArtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormArt::class);
    }

//    /**
//     * @return FormArt[] Returns an array of FormArt objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FormArt
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
