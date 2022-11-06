<?php

namespace App\Controller;

use App\Entity\Cita;
use App\Form\CitaType;
use App\Repository\ReservaRepository;
use App\Repository\TutorRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PlantillaController extends AbstractController
{
    #[Route('/añadir_citas', name: 'aniadir_citas')]
    public function addCitas(Request $request,ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $cita = new Cita();
        $form = $this->createForm(CitaType::class,$cita);
        $form->handleRequest($request);

        $username = $authenticationUtils->getLastUsername();
        $tutorRepository = new TutorRepository($doctrine);
        $tutor = $tutorRepository->findOneBy(['username' => $username]);
        

        if ($form->isSubmitted() && $form->isValid()) {

            $cita->setFecha($form->get('fecha')->getData());
            $cita->setHora($form->get('hora')->getData());
            $cita->setServicio($form->get('Servicio')->getData());
            $cita->setDisabled(false);
            $cita->setTutor($tutor);

            $em = $doctrine->getManager();
            $em->persist($cita);
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
}