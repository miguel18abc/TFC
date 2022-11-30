<?php

namespace App\Controller;

use App\Entity\Reserva;
use App\Entity\Tutor;
use App\Form\TutorType;
use App\Repository\CitaRepository;
use App\Repository\ReservaRepository;
use App\Repository\TutorRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Constraints\Regex;

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

    #[Route('/familia/tutor', name: 'showTutores')]
    public function listadoTutoria(Request $request): Response
    {
        $form = $this->createFormBuilder()
                    ->add('Tutor', EntityType::class, ['label' => 'Seleccione tutor ', 'class' => Tutor::class, 'choice_label' => 'username'])
                    ->add('Elegir', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $session = $this->requestStack->getSession();
            $session->start();
            $session->set('tutor', $data['Tutor']->getId());
            return $this->redirectToRoute('tutoria');
        }
        return $this->render('familia/listarTutores.html.twig', ['form' => $form->createView()]);
    }


    #[Route('/familia/Tutoría', name: 'tutoria')]
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
        $session->set('servicio','Tutoría');
        $servicio = $session->get('servicio');
        $idTutor = $session->get('tutor');
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio,'error' => $error,'id' => $idTutor]);
    }

    #[Route('/familia/Tutoría/{id}', name: 'tutoria_reserva')]
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
            $tutorRepository = new TutorRepository($doctrine);
            $tutor = $tutorRepository->findOneBy(['username' => $cita->getTutor()->getUsername()]);

            $em = $doctrine->getManager();
            $cita->setUser($user);
            $cita->setDisabled(true);
            $reserva->setCita($cita);
            $reserva->setUsername($username);
            $reserva->setTutor($tutor);
            $em->persist($cita);
            $em->persist($reserva);
            $em->flush();

            $this->addFlash('success', 'Datos guardados.');
            return $this->render('familia/exito.html.twig',['id' => $id,'username' => $username,'servicio' => $servicio]);
        
    }
    
    #[Route('/consulta/Tutoría/{username}', name:'cita_consulta_tutoria')]
    public function consultasTutoria(string $username,ManagerRegistry $doctrine)
    {
        $reservaRepository = new ReservaRepository($doctrine);
        $reservas = $reservaRepository->findAll();
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['reservas' => $reservas,'username' => $username,'servicio' => $servicio]);
    }

    //CÓDIGO DE ORIENTACIÓN

    #[Route('/familia/orientador', name: 'showOrientacion')]
    public function listadoOrientacion(Request $request): Response
    {
        $form = $this->createFormBuilder()
                    ->add('Orientador', EntityType::class, ['label' => 'Seleccione orientador/ora ', 'class' => Tutor::class, 'choice_label' => 'username'])
                    ->add('Elegir', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $session = $this->requestStack->getSession();
            $session->start();
            $session->set('orientador', $data['Orientador']->getId());
            return $this->redirectToRoute('orientacion');
        }
        return $this->render('familia/listarTutores.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/familia/Orientación', name: 'orientacion')]
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
        $session->set('servicio','Orientación');
        $servicio = $session->get('servicio');
        $idOrientandor = $session->get('orientador');

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio,'id' => $idOrientandor]);
    }

    #[Route('/familia/Orientación/{id}', name: 'orientacion_reserva')]
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
            $tutorRepository = new TutorRepository($doctrine);
            $tutor = $tutorRepository->findOneBy(['username' => $cita->getTutor()->getUsername()]);

            $em = $doctrine->getManager();
            $cita->setUser($user);
            $cita->setDisabled(true);
            $reserva->setCita($cita);
            $reserva->setUsername($username);
            $reserva->setTutor($tutor);
            $em->persist($cita);
            $em->persist($reserva);
            $em->flush();

            $this->addFlash('success', 'Datos guardados.');
            return $this->render('familia/exito.html.twig',['id' => $id,'username' => $username,'servicio' => $servicio]);
        
    }

    #[Route('/consulta/Orientación/{username}', name:'cita_consulta_orientacion')]
    public function consultasOrientacion(string $username,ManagerRegistry $doctrine)
    {
        $reservaRepository = new ReservaRepository($doctrine);
        $reservas = $reservaRepository->findAll();
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['reservas' => $reservas,'username' => $username,'servicio' => $servicio]);
    }

    //CÓDIGO DE SECRETARÍA

    #[Route('/familia/secretario', name: 'showSecretaria')]
    public function listadoSecretaria(Request $request): Response
    {
        $form = $this->createFormBuilder()
                    ->add('Secretario', EntityType::class, ['label' => 'Seleccione secretario/a ', 'class' => Tutor::class, 'choice_label' => 'username'])
                    ->add('Elegir', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $session = $this->requestStack->getSession();
            $session->start();
            $session->set('secretaria', $data['Secretario']->getId());
            return $this->redirectToRoute('secretaria');
        }
        return $this->render('familia/listarTutores.html.twig', ['form' => $form->createView()]);
    }


    #[Route('/familia/Secretaría', name: 'secretaria')]
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
        $session->set('servicio','Secretaría');
        $servicio = $session->get('servicio');
        $idSecretario = $session->get('secretaria');

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio,'id' => $idSecretario]);
    }

    #[Route('/familia/Secretaría/{id}', name: 'secretaria_reserva')]
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
            $tutorRepository = new TutorRepository($doctrine);
            $tutor = $tutorRepository->findOneBy(['username' => $cita->getTutor()->getUsername()]);
    
            $em = $doctrine->getManager();
            $cita->setUser($user);
            $cita->setDisabled(true);
            $reserva->setCita($cita);
            $reserva->setUsername($username);
            $reserva->setTutor($tutor);
            $em->persist($cita);
            $em->persist($reserva);
            $em->flush();

            $this->addFlash('success', 'Datos guardados.');
            return $this->render('familia/exito.html.twig',['id' => $id,'username' => $username,'servicio' => $servicio]);
        
    }

    #[Route('/consulta/Secretaría/{username}', name:'cita_consulta_secretaria')]
    public function consultasSecretaria(string $username,ManagerRegistry $doctrine)
    {
        $reservaRepository = new ReservaRepository($doctrine);
        $reservas = $reservaRepository->findAll();
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['reservas' => $reservas,'username' => $username,'servicio' => $servicio]);
    }
}
