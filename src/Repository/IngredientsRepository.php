<?php

namespace App\Repository;

use App\Entity\Ingredients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Ingredients|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ingredients|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ingredients[]    findAll()
 * @method Ingredients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IngredientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ingredients::class);
    }

    // /**
    //  * @return Ingredients[] Returns an array of Ingredients objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ingredients
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function deleteIngredients(Ingredients $ingredients)
    {
        $this->entityManager->remove($ingredients);
        $this->entityManager->flush();
    }
    public function update(Ingredients $ingredients)
    {
        $this->entityManager->persist($ingredients);
        $this->entityManager->flush();

        return $ingredients;
    }

}
