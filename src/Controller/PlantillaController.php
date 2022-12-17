<?php

namespace App\Controller;

use App\Entity\Calendar;
use App\Entity\Tutor;
use App\Entity\User;
use App\Form\CalendarType;
use App\Form\UserAdminType;
use App\Repository\ReservaRepository;
use App\Repository\ServiciosRepository;
use App\Repository\TutorRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class PlantillaController extends AbstractController
{
    #[Route('/añadir_citas', name: 'aniadir_citas')]
    public function addCitas(Request $request,ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $event = new Calendar();
        $form = $this->createForm(CalendarType::class,$event);
        $form->handleRequest($request);

        $username = $authenticationUtils->getLastUsername();
        $tutorRepository = new TutorRepository($doctrine);
        $tutor = $tutorRepository->findOneBy(['username' => $username]);
        

        if ($form->isSubmitted() && $form->isValid()) {

            $event->setTitle($form->get('title')->getData());
            $event->setStart($form->get('start')->getData());
            $event->setEnd($form->get('end')->getData());
            $event->setDescription($form->get('description')->getData());
            $event->setServicios($tutor->getServicios());
            $event->setBackgroundColor('#37a8ec');
            $event->setTextColor('#000000');
            $event->setBorderColor('#000000');
            $event->setDisabled(false);
            $event->setTutor($tutor);

            $em = $doctrine->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('plantilla');
        }

        return $this->render('plantilla/formularioCita.html.twig',['form' => $form->createView()]);
    }

    #[Route('/miscitas', name: 'misCitas')]
    public function misCitas(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $username = $authenticationUtils->getLastUsername();
        
        $tutorRepository = new TutorRepository($doctrine);
        $tutor = $tutorRepository->findOneBy(['username' => $username]);

        $reservaRepository = new ReservaRepository($doctrine);
        $reservas = $reservaRepository->findBy(['tutor' => $tutor->getId()]);
        
        return $this->render('plantilla/misCitas.html.twig',['username' => $username,'reservas' => $reservas]);

    }

    #[Route('/addUser', name: 'addUser')]
    public function addAdminUser(Request $request,ManagerRegistry $doctrine,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $serviciosRepository = new ServiciosRepository($doctrine);
        $servicios = $serviciosRepository->findAll();
        $user = new User();
        $tutor = new Tutor();
        $form = $this->createForm(UserAdminType::class,$user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $user->setUsername($form->get('username')->getData());
            $user->setPassword($userPasswordHasher->hashPassword($user,$form->get('password')->getData()));
            $roles = ["ROLE_ADMIN","ROLE_USER"];
            $user->setRoles($roles);
            $tutor->setUser($user);
            $tutor->setUsername($form->get('username')->getData());
            $servicioSelect = $serviciosRepository->findOneBy(['Nombre' => $_POST['selectServicios']]);
            $tutor->setServicios($servicioSelect);

            
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->persist($tutor);
            $em->flush();
            return $this->redirectToRoute('plantilla');
        }

        return $this->render('plantilla/addUsuarioAdmin.html.twig',['form' => $form->createView(),'servicios' => $servicios]);
    }
}
