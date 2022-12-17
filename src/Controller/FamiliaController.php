<?php

namespace App\Controller;

use App\Entity\Reserva;
use App\Repository\CalendarRepository;
use App\Repository\ReservaRepository;
use App\Repository\TutorRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('anular/{id}', name:'anular')]
    public function anular(ManagerRegistry $doctrine, $id)
    {
        $reservaRepository = new ReservaRepository($doctrine, $doctrine->getManager());
        $reserva = $reservaRepository->findOneBy(['id' => $id]);
        $calendar = $reserva->getCalendar();
        $calendar->setDisabled(false);
        $em = $doctrine->getManager();
        $em->remove($reserva);
        $em->flush();
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/anulaReserva.html.twig', ['servicio' => $servicio,'trabajador' => $session->get('trabajador')]);
    }

    //CÓDIGO DE TUTORÍA

    #[Route('/familia/tutor', name: 'showTutores')]
    public function listadoTutoria(Request $request,ManagerRegistry $doctrine): Response
    {
        $tutorRepository = new TutorRepository($doctrine);
        $tutores = $tutorRepository->findBy(['servicios' => 3]);
        $form = $this->createFormBuilder()
                    // ->add('Tutor', EntityType::class, ['label' => 'Seleccione tutor ', 'class' => Tutor::class, 'choice_label' => $tutores])
                    ->add('Elegir', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $session = $this->requestStack->getSession();
            $session->start();
            $session->set('tutor', $_POST['selectTutores']);
            return $this->redirectToRoute('tutoria');
        }
        return $this->render('familia/listarTutores.html.twig', ['form' => $form->createView(),'tutores' => $tutores]);
    }


    #[Route('/familia/tutor/Tutoría', name: 'tutoria')]
    public function indexTutoria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils,CalendarRepository $calendar): Response
    {
        $session = $this->requestStack->getSession();
        $session->start();
        $lastUsername = $authenticationUtils->getLastUsername();
        $calendarRepository = new CalendarRepository($doctrine);
        $calendar = $calendarRepository->findBy(['servicios'=>3,'tutor' => $session->get('tutor'),'disabled' => false]);
        $rdvs = [];
        foreach($calendar as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getBackgroundColor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
            ];
        }
        $data = $this->json($rdvs);

        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','Tutoría');
        $session->set('trabajador','tutor');

        return $this->render('familia/index.html.twig', ['data' => $data->getContent(),'username' => $lastUsername,'events' => $calendar,'servicio' => 'Tutoría','trabajador' => $session->get('trabajador')]);
    }

    #[Route('/familia/tutor/Tutoría/{id}', name:'tutoria_reserva')]
    public function reservaTutoria(AuthenticationUtils $authenticationUtils,ManagerRegistry $doctrine,$id)
    {
        $session = $this->requestStack->getSession();
        $session->start();
        $idTutor = $session->get('tutor');

        $tutorRepository = new TutorRepository($doctrine);
        $tutor = $tutorRepository->findOneBy(['id' => $idTutor]);
        $username = $authenticationUtils->getLastUsername();
        $calendarRepository = new CalendarRepository($doctrine);
        $event = $calendarRepository->findOneBy(['id' => $id]);
        $userRepository = new UserRepository($doctrine);
        $user = $userRepository->findOneBy(['username' => $username]);
        $reserva = new Reserva();

        $event->setDisabled(true);
        $event->setReserva($reserva);
        $event->setUser($user);
        $reserva->setUsername($username);
        $reserva->setTutor($tutor);
        $reserva->setCalendar($event);
        
        $em = $doctrine->getManager();
        $em->persist($event);
        $em->persist($reserva);
        $em->flush();

        return $this->render('confirmacion/tutoria.html.twig',['event' => $event]);
    }
    
    #[Route('/familia/tutor/Tutoría/consulta/{username}', name:'cita_consulta_tutoria')]
    public function consultasTutoria(string $username,ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils)
    {
        $username = $authenticationUtils->getLastUsername();
        $reservaRepository = new ReservaRepository($doctrine);
        $reservas = $reservaRepository->findBy(['Username' => $username]);
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['reservas' => $reservas,'username' => $username,'servicio' => $servicio,'trabajador' => 'tutor']);
    }

    //CÓDIGO DE ORIENTACIÓN

    #[Route('/familia/orientador', name: 'showOrientacion')]
    public function listadoOrientacion(Request $request,ManagerRegistry $doctrine): Response
    {
        $tutorRepository = new TutorRepository($doctrine);
        $orientadores = $tutorRepository->findBy(['servicios' => 1]);
        $form = $this->createFormBuilder()
                    // ->add('Orientador', EntityType::class, ['label' => 'Seleccione orientador/ora ', 'class' => Tutor::class, 'choice_label' => 'username'])
                    ->add('Elegir', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $session = $this->requestStack->getSession();
            $session->start();
            var_dump($_POST['selectTutores']);
            $session->set('orientador', $_POST['selectTutores']);
            return $this->redirectToRoute('orientacion');
        }
        return $this->render('familia/listarTutores.html.twig', ['form' => $form->createView(),'tutores' => $orientadores]);
    }

    #[Route('/familia/orientador/Orientación', name: 'orientacion')]
    public function indexOrientacion(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils,CalendarRepository $calendar): Response
    {
        $session = $this->requestStack->getSession();
        $session->start();
        $lastUsername = $authenticationUtils->getLastUsername();
        $calendarRepository = new CalendarRepository($doctrine);
        $calendar = $calendarRepository->findBy(['servicios'=>1,'tutor' => $session->get('orientador'),'disabled' => false]);
        $rdvs = [];
        foreach($calendar as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getBackgroundColor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
            ];
        }
        $data = $this->json($rdvs);

        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','Orientación');
        $session->set('trabajador','orientador');

        return $this->render('familia/index.html.twig', ['data' => $data->getContent(),'username' => $lastUsername,'events' => $calendar,'servicio' => 'Orientación','trabajador' => $session->get('trabajador')]);
    }

    #[Route('/familia/orientador/Orientación/{id}', name:'orientación_reserva')]
    public function reservaOrientación(AuthenticationUtils $authenticationUtils,ManagerRegistry $doctrine,$id)
    {
        $session = $this->requestStack->getSession();
        $session->start();
        $idTutor = $session->get('orientador');

        $tutorRepository = new TutorRepository($doctrine);
        $tutor = $tutorRepository->findOneBy(['id' => $idTutor]);
        $username = $authenticationUtils->getLastUsername();
        $calendarRepository = new CalendarRepository($doctrine);
        $event = $calendarRepository->findOneBy(['id' => $id]);
        $userRepository = new UserRepository($doctrine);
        $user = $userRepository->findOneBy(['username' => $username]);
        $reserva = new Reserva();

        $event->setDisabled(true);
        $event->setReserva($reserva);
        $event->setUser($user);
        $reserva->setUsername($username);
        $reserva->setTutor($tutor);
        $reserva->setCalendar($event);
        
        $em = $doctrine->getManager();
        $em->persist($event);
        $em->persist($reserva);
        $em->flush();

        return $this->render('confirmacion/tutoria.html.twig',['event' => $event]);
    }

    #[Route('/familia/orientador/Orientación/consulta/{username}', name:'consulta_orientación')]
    public function consultasOrientación(string $username,ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils)
    {
        $username = $authenticationUtils->getLastUsername();
        $reservaRepository = new ReservaRepository($doctrine);
        $reservas = $reservaRepository->findBy(['Username' => $username]);
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['reservas' => $reservas,'username' => $username,'servicio' => $servicio,'trabajador' => 'orientador']);
    }


    //CÓDIGO DE SECRETARÍA

    #[Route('/familia/secretario', name: 'showSecretaria')]
    public function listadoSecretaria(Request $request,ManagerRegistry $doctrine): Response
    {
        $tutorRepository = new TutorRepository($doctrine);
        $secretarios = $tutorRepository->findBy(['servicios' => 2]);
        $form = $this->createFormBuilder()
                    // ->add('Secretario', EntityType::class, ['label' => 'Seleccione secretario/a ', 'class' => Tutor::class, 'choice_label' => 'username'])
                    ->add('Elegir', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $session = $this->requestStack->getSession();
            $session->start();
            $session->set('secretaria', $_POST['selectTutores']);
            return $this->redirectToRoute('secretaria');
        }
        return $this->render('familia/listarTutores.html.twig', ['form' => $form->createView(),'tutores' => $secretarios]);
    }


    #[Route('/familia/secretario/Secretaría', name: 'secretaria')]
    public function indexSecretaria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils,CalendarRepository $calendar): Response
    {
        $session = $this->requestStack->getSession();
        $session->start();
        $lastUsername = $authenticationUtils->getLastUsername();
        $calendarRepository = new CalendarRepository($doctrine);
        $calendar = $calendarRepository->findBy(['servicios'=>2,'tutor' => $session->get('secretaria'),'disabled' => false]);
        $rdvs = [];
        foreach($calendar as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getBackgroundColor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
            ];
        }
        $data = $this->json($rdvs);

        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','Secretaría');
        $session->set('trabajador','secretario');

        return $this->render('familia/index.html.twig', ['data' => $data->getContent(),'username' => $lastUsername,'events' => $calendar,'servicio' => 'Secretaría','trabajador' => $session->get('trabajador')]);
    }

    #[Route('/familia/secretario/Secretaría/{id}', name: 'secretaria_reserva')]
    public function reservaSecretaria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils,$id)
    { 
        $session = $this->requestStack->getSession();
        $session->start();
        $idTutor = $session->get('secretaria');

        $tutorRepository = new TutorRepository($doctrine);
        $tutor = $tutorRepository->findOneBy(['id' => $idTutor]);
        $username = $authenticationUtils->getLastUsername();
        $calendarRepository = new CalendarRepository($doctrine);
        $event = $calendarRepository->findOneBy(['id' => $id]);
        $userRepository = new UserRepository($doctrine);
        $user = $userRepository->findOneBy(['username' => $username]);
        $reserva = new Reserva();

        $event->setDisabled(true);
        $event->setReserva($reserva);
        $event->setUser($user);
        $reserva->setUsername($username);
        $reserva->setTutor($tutor);
        $reserva->setCalendar($event);
        
        $em = $doctrine->getManager();
        $em->persist($event);
        $em->persist($reserva);
        $em->flush();

        return $this->render('confirmacion/tutoria.html.twig',['event' => $event]);
    }

    #[Route('/familia/secretario/Secretaría/consulta/{username}', name:'cita_consulta_secretaria')]
    public function consultasSecretaria(string $username,ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils)
    {
        $username = $authenticationUtils->getLastUsername();
        $reservaRepository = new ReservaRepository($doctrine);
        $reservas = $reservaRepository->findBy(['Username' => $username]);
        $session = $this->requestStack->getSession();
        $session->start();
        $servicio = $session->get('servicio');
        return $this->render('familia/reservas.html.twig', ['reservas' => $reservas,'username' => $username,'servicio' => $servicio,'trabajador' => 'secretario']);
    }

}
