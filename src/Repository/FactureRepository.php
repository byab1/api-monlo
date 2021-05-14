<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Facture;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Facture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Facture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Facture[]    findAll()
 * @method Facture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Facture::class);
    }

    //Obtenir le dernier chrono des factures d'un utilisateur
    public function getNextChrono(User $user)
    {
        return $this->createQueryBuilder("i")
            ->select("i.numFacture")
            ->join("i.user", "u")
            ->orderBy("i.numFacture", "DESC")
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleScalarResult() + 1;
    }

    // /**
    //  * @return Facture[] Returns an array of Facture objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Facture
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
