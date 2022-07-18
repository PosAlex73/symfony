<?php

namespace App\Repository;

use App\Entity\Dish;
use App\Enums\CommonStatuses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dish>
 *
 * @method Dish|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dish|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dish[]    findAll()
 * @method Dish[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DishRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dish::class);
    }

    public function add(Dish $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dish $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getForIndex()
    {
        $dishes = $this->createQueryBuilder('d')
            ->where('d.status = :status')
            ->setMaxResults(20)
            ->setParameters(['status' => CommonStatuses::ACTIVE])
            ->getQuery()
            ->getResult();

        return $dishes;
    }

    public function getByRestaurantActive(int $id)
    {
        return $this->createQueryBuilder('d')
            ->where('d.status = :status')
            ->andWhere('d.restaurant = :id')
            ->setParameters(['status' => CommonStatuses::ACTIVE, 'id' => $id])
            ->getQuery()
            ->getResult();
    }

    public function getByCategory($id)
    {
        $dishClass = Dish::class;
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT d, c FROM {$dishClass} d INNER JOIN d.category c WHERE d.id = :category_id");
        $query->setParameter('category_id', $id);

        return $query->execute();
    }
}
