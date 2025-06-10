<?php

namespace App\Repository;

use App\Entity\Creations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Creations>
 *
 * @method Creations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Creations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Creations[]    findAll()
 * @method Creations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Creations::class);
    }

    /**
     * Trouve les créations selon les filtres publicCible et catégorie
     *
     * @param string|null $publicCible
     * @param string|null $categorie
     * @return Creations[]
     */
    public function findByFilters(?string $publicCible, ?string $categorie): array
    {
        $qb = $this->createQueryBuilder('c');

        if ($publicCible) {
            $qb->andWhere('c.publicCible = :publicCible')
               ->setParameter('publicCible', $publicCible);
        }

        if ($categorie) {
            $qb->andWhere('c.categorie = :categorie')
               ->setParameter('categorie', $categorie);
        }

        return $qb->getQuery()->getResult();
    }
}
