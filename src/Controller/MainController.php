<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
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
