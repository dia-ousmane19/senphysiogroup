<?php

namespace App\Repository;

use App\Entity\Services;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Services|null find($id, $lockMode = null, $lockVersion = null)
 * @method Services|null findOneBy(array $criteria, array $orderBy = null)
 * @method Services[]    findAll()
 * @method Services[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Services::class);
    }

    /**
     * @return Services[] Returns an array of Services objects
     */

    public function findAllService()
    {
        return $this->createQueryBuilder('s')
            // ->andWhere('s.exampleField = :val')
            // ->setParameter('val', $value)
            // ->orderBy('s.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Services[] Returns an array of Services objects
     */

    public function findOtherService($slug): array
    {
        return $this->createQueryBuilder('s')
             ->andWhere('s.slug != :val')
             ->setParameter('val', $slug)
            // ->orderBy('s.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }



    public function findOneServices($slug): ?Services
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.slug = :val')
            ->setParameter('val', $slug)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
