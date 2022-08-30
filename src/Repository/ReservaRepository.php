<?php

namespace App\Repository;

use App\Entity\Reserva;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;


/**
 * @method Reserva|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reserva|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reserva[]    findAll()
 * @method Reserva[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Reserva::class);
        $this->manager = $manager;
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Reserva $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    /* public function remove(Reserva $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    } */

    public function remove(Reserva $reserva)
    {
        $this->manager->remove($reserva);
        $this->manager->flush();
    }
    
    public function findAllDniTelefono($dni, $telefono)
    {
        $em = $this->getEntityManager();

        $query = $em->createQuery('SELECT r FROM App:Reserva r  WHERE r.dni = :dni and r.telefono = :telefono');


        $query->setParameter('dni', $dni);
        $query->setParameter('telefono', $telefono);


        return ($query->getResult());
    }

    public function findOneById($id)
    {
        return $this->findOneBy(['id' => $id]);
    }
    /* public function remove(Reserva $reserva)
    {
        $this->manager->remove($reserva);
        $this->manager->flush();
    } */

    // /**
    //  * @return Reserva[] Returns an array of Reserva objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reserva
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
