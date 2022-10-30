<?php

namespace App\Controller;

use App\Entity\Cita;
use App\Form\CitaType;
use App\Repository\ReservaRepository;
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
    public function addCitas(Request $request,ManagerRegistry $doctrine): Response
    {
        $cita = new Cita();
        $form = $this->createForm(CitaType::class,$cita);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $cita->setFecha($form->get('fecha')->getData());
            $cita->setHora($form->get('hora')->getData());
            $cita->setServicio($form->get('Servicio')->getData());
            $cita->setDisabled(false);

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
        $userRepository = new UserRepository($doctrine);
        $user = $userRepository->findOneBy(['username' => $username]);
        $reservaRepository = new ReservaRepository($doctrine);
        $reservas = $reservaRepository->findBy(['user' => $user->getId()]);

        return $this->render('plantilla/misCitas.html.twig',['username' => $username,'reservas' => $reservas]);
    }
}
