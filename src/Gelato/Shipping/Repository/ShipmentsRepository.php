<?php

namespace App\Gelato\Shipping\Repository;

use App\Gelato\Shipping\Entity\Shipments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Shipments|null find($id, $lockMode = null, $lockVersion = null)
 * @method Shipments|null findOneBy(array $criteria, array $orderBy = null)
 * @method Shipments[]    findAll()
 * @method Shipments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShipmentsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Shipments::class);
    }

    // /**
    //  * @return Shipments[] Returns an array of Shipments objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Shipments
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
