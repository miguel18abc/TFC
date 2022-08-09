<?php

namespace App\Controller;

use App\Repository\OrientacionRepository;
use App\Repository\SecretariaRepository;
use App\Repository\TutoriaRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(ManagerRegistry $doctrine): Response
    {

        $orientacionRepository = new OrientacionRepository($doctrine);
        $orientaciones = $orientacionRepository->findAll();
        $tutoriaRepository = new TutoriaRepository($doctrine);
        $tutorias = $tutoriaRepository->findAll();
        $secretariaRepository = new SecretariaRepository($doctrine);
        $secretarias = $secretariaRepository->findAll();

        return $this->render('main/index.html.twig', [
            'orientaciones' => $orientaciones,
            'tutorias' => $tutorias,
            'secretarias' => $secretarias
        ]);
    }

    #[Route('/alumnado', name: 'alumnado')]
    public function indexAlumnado(): Response
    {
        return $this->render('main/alumnado.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/plantilla', name: 'plantilla')]
    public function indexPlantilla(): Response
    {
        return $this->render('main/plantilla.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/tutor', name: 'tutor')]
    public function indexTutor(): Response
    {
        return $this->render('main/tutor.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
