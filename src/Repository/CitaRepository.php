<?php

namespace App\Repository;

use App\Entity\Cita;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * @method Cita|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cita|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cita[]    findAll()
 * @method Cita[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CitaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cita::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Cita $entity, bool $flush = true): void
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
    public function remove(Cita $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function nativeSQL($valor)
    {
        $em = $this->getEntityManager();


        $rsm = new ResultSetMapping();
        // build rsm here

        $query = $em->createNativeQuery('SELECT * FROM cita WHERE cita.id NOT IN ( SELECT cita_id FROM reserva ) order by fecha, hora', $rsm);





        $query->setParameter(1, $valor);

        $resultado = $query->getResult();
        var_dump(serialize($resultado));

        return ($resultado);
    }

    public function findByDate()
    {
        $em = $this->getEntityManager();

        //$query = $em->createQuery('SELECT c FROM App:Cita c WHERE c.fecha > :fecha ORDER BY c.fecha, c.hora');
        $query = $em->createQuery('SELECT c FROM App:Cita c WHERE c.fecha > :fecha and c not in ( SELECT m FROM App:Cita m  INNER JOIN m.reserva r where r.id is not null ) ORDER BY c.fecha, c.hora');
        $fecha = date('y-m-d');
        $query->setParameter('fecha', $fecha);


        return ($query->getResult());
    }


    // /**
    //  * @return Cita[] Returns an array of Cita objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cita
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
