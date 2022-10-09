<?php

namespace App\Repository;

use App\Entity\Cita;
use App\Entity\Reserva;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpParser\Node\Expr\Cast\Object_;

/**
 * @extends ServiceEntityRepository<Reserva>
 *
 * @method Reserva|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reserva|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reserva[]    findAll()
 * @method Reserva[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reserva::class);
    }

    public function add(Reserva $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reserva $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // public function findUsernameAndService(String $username,String $servicio): ?Reserva
    // {
    //     $query = $this->getEntityManager()->createQuery('SELECT r.username,s.nombre,c.fecha,c.hora 
    //                                                     FROM App\Entity\Reserva r INNER JOIN App\Entity\Cita c ON r.cita_id==c.id INNER JOIN App\Entity\Servicios s ON c.servicio_id==s.id
    //                                                     WHERE :username==r.username AND :servicio==s.nombre');
    //     $query->setParameter('username',$username);
    //     $query->setParameter('servicio',$servicio);
    //     return $query->getOneOrNullResult();
    // }
//    /**
//     * @return Reserva[] Returns an array of Reserva objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reserva
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
