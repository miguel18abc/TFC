<?php

namespace App\Controller;

use App\Entity\Cita;
use App\Entity\Reserva;
use App\Form\ReservaType;
use App\Repository\CitaRepository;
use App\Repository\ReservaRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FamiliaController extends AbstractController
{

    private $requestStack;

    public function __construct(CitaRepository $citaRepository, ReservaRepository $reservaRepository, RequestStack $requestStack)
    {
        $this->citaRepository = $citaRepository;
        $this->reservaRepository = $reservaRepository;
        $this->requestStack = $requestStack;
    }

    #[Route('/familia/orientacion', name: 'orientacion')]
    public function indexOrientacion(ManagerRegistry $doctrine): Response
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>1]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        return $this->render('familia/index.html.twig', ['citas' => $citas]);
    }

    #[Route('/familia/secretaria', name: 'secretaria')]
    public function indexSecretaria(ManagerRegistry $doctrine): Response
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>2]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        return $this->render('familia/index.html.twig', ['citas' => $citas]);
    }

    #[Route('/familia/tutoria', name: 'tutoria')]
    public function indexTutoria(ManagerRegistry $doctrine): Response
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>3]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        return $this->render('familia/index.html.twig', ['citas' => $citas]);
    }

    #[Route('/listado', name:'cita_listado')]
    public function listado(ManagerRegistry $doctrine)
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findByDate();
        return $this->render('familia/listado.html.twig', ["citas" => $citas]);
    }

    #[Route('/reserva/{id}', name: 'reserva')]
    public function reserva(ManagerRegistry $doctrine, Request $request, $id)
    { {

            $citaRepository = new CitaRepository($doctrine);
            $reserva = new Reserva();
            $form = $this->createForm(ReservaType::class, $reserva);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $doctrine->getManager();
                
                $cita = $citaRepository->findOneById($id);
                $reserva->setCita($cita);
                $em->persist($reserva);
                $em->flush();

                return $this->render('familia/exito.twig');
            } else
                return $this->render('familia/reserva.html.twig', array('form' => $form->createView(),));
        }
    }

    #[Route('/consulta', name:'cita_consulta')]
    public function consulta(Request $request)
    {
        /* $reservaRepository = new ReservaRepository($doctrine); */
        /* $requestStack = new RequestStack($doctrine); */
        $form = $this->createFormBuilder()
            ->add('dni', TextType::class)
            ->add('telefono', TextType::class)
            ->add('Send', SubmitType::class)
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $reservas = $this->reservaRepository->findAllDniTelefono($data['dni'], $data['telefono']);
            if ($reservas) {
                $session = $this->requestStack->getSession();
                $session->set('dni', $data['dni']);
                $session->set('telefono', $data['telefono']);
            }
            return $this->render('familia/reservas.html.twig', array('reservas' => $reservas));
        } else
            return $this->render('familia/form.html.twig', array('form' => $form->createView(),));
    }

    
    #[Route('cita/anular/{id}', name:'anular_cita')]
    public function anular_cita(ManagerRegistry $doctrine, $id): Response
    {
        $reservaRepository = new ReservaRepository($doctrine, $doctrine->getManager());
        $reserva = $reservaRepository->findOneBy(['id' => $id]);
        $em = $doctrine->getManager();
        $em->remove($reserva);
        return $this->render('familia/anulaReserva.html.twig', ['reserva']);
    }

    #[Route('anular/{id}', name:'anular')]
    public function anular(ManagerRegistry $doctrine, $id)
    {
        $reservaRepository = new ReservaRepository($doctrine, $doctrine->getManager());
        $reserva = $reservaRepository->findOneById($id);
        $reservaRepository->remove($reserva);
        return $this->render('familia/anulaReserva.html.twig', []);
    }

    #[Route('/anulacion/{id}', name:'cita_anulacion')]
    public function anulacion($id)
    {
        $session = $this->requestStack->getSession();


        // gets an attribute by name
        $dni = $session->get('dni');
        // gets an attribute by name
        $telefono = $session->get('telefono');



        if (!$dni || !$telefono)
            return $this->render('familia/msg.html.twig', array('msg' => 'Se ha producido un error'));

        $reserva = $this->reservaRepository->findOneById($id);
        if (!$reserva || $reserva->getDni() != $dni || $reserva->getTelefono() != $telefono)
            return $this->render('familia/msg.html.twig', array('msg' => 'Se ha producido un error'));
        $this->reservaRepository->remove($reserva);
        return $this->render('familia/msg.html.twig', array('msg' => 'Se ha eliminado su reserva'));
    }
}
