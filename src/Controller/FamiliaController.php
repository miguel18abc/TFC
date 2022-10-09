<?php

namespace App\Controller;

use App\Entity\Reserva;
use App\Form\ReservaType;
use App\Repository\CitaRepository;
use App\Repository\ReservaRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class FamiliaController extends AbstractController
{

    private $requestStack;
    

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function menuFamilias(AuthenticationUtils $authenticationUtils,$id)
    {
        $session = $this->requestStack->getSession();
        $servicio = $session->get('servicio');
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('familia/menu.html.twig', ['username' => $lastUsername,'servicio' => $servicio,'id' => $id]);
    }

    // public function menuServicios()
    // {
    //     $session = $this->requestStack->getSession();
    //     $session->start();
    //     $servicio = $session->get('servicio');
    //     return $this->render('main/exito.html.twig',['servicio' => $servicio]);
    //     // return $this->render('familia/exito.html.twig',['servicio' => $name_servicio]);

    // }


    #[Route('anular/{id}', name:'anular')]
    public function anular(ManagerRegistry $doctrine, $id)
    {
        $reservaRepository = new ReservaRepository($doctrine, $doctrine->getManager());
        $reserva = $reservaRepository->findOneBy(['id' => $id]);
        $cita = $reserva->getCita();
        $cita->setDisabled(false);
        $em = $doctrine->getManager();
        $em->remove($reserva);
        $em->flush();
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/anulaReserva.html.twig', ['servicio' => $servicio]);
    }

    //CÓDIGO DE TUTORÍA
    #[Route('/familia/tutoria', name: 'tutoria')]
    public function indexTutoria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>3]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','tutoria');
        $servicio = $session->get('servicio');
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio,'error' => $error]);
    }

    #[Route('/familia/tutoria/{id}', name: 'tutoria_reserva')]
    public function reservaTutoria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils,$id)
    { 
            $session = $this->requestStack->getSession();
            $session->start();
            $servicio = $session->get('servicio');
            $username = $authenticationUtils->getLastUsername();
            $citaRepository = new CitaRepository($doctrine);
            $cita = $citaRepository->findOneBy(['id' => $id]);
            $userRepository = new UserRepository($doctrine);
            $user = $userRepository->findOneBy(['username' => $username]);
            $reserva = new Reserva();
    
            $em = $doctrine->getManager();
            $cita->setUser($user);
            $cita->setDisabled(true);
            $reserva->setCita($cita);
            $reserva->setUsername($username);
            $em->persist($cita);
            $em->persist($reserva);
            $em->flush();

            $this->addFlash('success', 'Datos guardados.');
            return $this->render('familia/exito.html.twig',['id' => $id,'username' => $username,'servicio' => $servicio]);
        
    }
    
    #[Route('/consulta/tutoria/{username}', name:'cita_consulta_tutoria')]
    public function consultasTutoria(string $username,ManagerRegistry $doctrine)
    {
        $citaRepository = new citaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>3]);
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['citas' => $citas,'username' => $username,'servicio' => $servicio]);
    }

    //CÓDIGO DE ORIENTACIÓN
    #[Route('/familia/orientacion', name: 'orientacion')]
    public function indexOrientacion(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();

        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>1]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','orientacion');
        $servicio = $session->get('servicio');

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio]);
    }

    #[Route('/familia/orientacion/{id}', name: 'orientacion_reserva')]
    public function reservaOrientacion(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils,$id)
    { 
            $session = $this->requestStack->getSession();
            $session->start();
            $servicio = $session->get('servicio');
            $username = $authenticationUtils->getLastUsername();
            $citaRepository = new CitaRepository($doctrine);
            $cita = $citaRepository->findOneBy(['id' => $id]);
            $userRepository = new UserRepository($doctrine);
            $user = $userRepository->findOneBy(['username' => $username]);
            $reserva = new Reserva();
    
            $em = $doctrine->getManager();
            $cita->setUser($user);
            $cita->setDisabled(true);
            $reserva->setCita($cita);
            $reserva->setUsername($username);
            $em->persist($cita);
            $em->persist($reserva);
            $em->flush();

            $this->addFlash('success', 'Datos guardados.');
            return $this->render('familia/exito.html.twig',['id' => $id,'username' => $username,'servicio' => $servicio]);
        
    }

    #[Route('/consulta/orientacion/{username}', name:'cita_consulta_orientacion')]
    public function consultasOrientacion(string $username,ManagerRegistry $doctrine)
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>1]);
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['citas' => $citas,'username' => $username,'servicio' => $servicio]);
    }

    //CÓDIGO DE SECRETARÍA
    #[Route('/familia/secretaria', name: 'secretaria')]
    public function indexSecretaria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>2]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        
        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','secretaria');
        $servicio = $session->get('servicio');

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio]);
    }

    #[Route('/familia/secretaria/{id}', name: 'secretaria_reserva')]
    public function reservaSecretaria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils,$id)
    { 
            $session = $this->requestStack->getSession();
            $session->start();
            $servicio = $session->get('servicio');
            $username = $authenticationUtils->getLastUsername();
            $citaRepository = new CitaRepository($doctrine);
            $cita = $citaRepository->findOneBy(['id' => $id]);
            $userRepository = new UserRepository($doctrine);
            $user = $userRepository->findOneBy(['username' => $username]);
            $reserva = new Reserva();
    
            $em = $doctrine->getManager();
            $cita->setUser($user);
            $cita->setDisabled(true);
            $reserva->setCita($cita);
            $reserva->setUsername($username);
            $em->persist($cita);
            $em->persist($reserva);
            $em->flush();

            $this->addFlash('success', 'Datos guardados.');
            return $this->render('familia/exito.html.twig',['id' => $id,'username' => $username,'servicio' => $servicio]);
        
    }

    #[Route('/consulta/secretaria/{username}', name:'cita_consulta_secretaria')]
    public function consultasSecretaria(string $username,ManagerRegistry $doctrine)
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>2]);
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['citas' => $citas,'username' => $username,'servicio' => $servicio]);
    }






    // Fernando OK

    #[Route('/listado', name:'cita_listado')]
    public function listado(ManagerRegistry $doctrine)
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findByDate();
        return $this->render('familia/listado.html.twig', ["citas" => $citas]);
    }

    // Fernando OK

    #[Route('/reserva/{id}', name: 'reserva')]
    public function reserva(ManagerRegistry $doctrine, Request $request, $id)
    { {

            $citaRepository = new CitaRepository($doctrine);
            $reserva = new Reserva();
            $form = $this->createForm(ReservaType::class, $reserva);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $em = $doctrine->getManager();
                $cita = $citaRepository->findOneBy(['id'=>$id]);
                $reserva->setCita($cita);
                $em->persist($reserva);
                $em->flush();

                return $this->render('familia/exito.twig');
            } else
                return $this->render('familia/reserva.html.twig', array('form' => $form->createView()));
        }
    }

    // Fernando OK

    // #[Route('/consulta', name:'cita_consulta')]
    // public function consulta(Request $request)
    // {
    //     /* $reservaRepository = new ReservaRepository($doctrine); */
    //     /* $requestStack = new RequestStack($doctrine); */
    //     $form = $this->createFormBuilder()
    //         ->add('dni', TextType::class)
    //         ->add('telefono', TextType::class)
    //         ->add('Send', SubmitType::class)
    //         ->getForm();


    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $data = $form->getData();

    //         $reservas = $this->reservaRepository->findAllDniTelefono($data['dni'], $data['telefono']);
    //         if ($reservas) {
    //             $session = $this->requestStack->getSession();
    //             $session->set('dni', $data['dni']);
    //             $session->set('telefono', $data['telefono']);
    //         }
    //         return $this->render('familia/reservas.html.twig', array('reservas' => $reservas));
    //     } else
    //         return $this->render('familia/form.html.twig', array('form' => $form->createView(),));
    // }

    // Fernando
    
    #[Route('cita/anular/{id}', name:'anular_cita')]
    public function anular_cita(ManagerRegistry $doctrine, $id): Response
    {
        $reservaRepository = new ReservaRepository($doctrine, $doctrine->getManager());
        $reserva = $reservaRepository->findOneBy(['id' => $id]);
        $em = $doctrine->getManager();
        $em->remove($reserva);
        return $this->render('familia/anulaReserva.html.twig');
    }

    // Fernando

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
