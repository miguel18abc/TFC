<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamiliaController extends AbstractController
{
    #[Route('/familia/tutoria', name: 'tutoria')]
    public function indexTutoria(): Response
    {
        return $this->render('familia/index.html.twig', [
            'controller_name' => 'TutoriaController',
        ]);
    }

    #[Route('/familia/orientacion', name: 'orientacion')]
    public function indexOrientación(): Response
    {
        return $this->render('familia/index.html.twig', [
            'controller_name' => 'OrientaciónController',
        ]);
    }

    #[Route('/familia/secretaria', name: 'secretaria')]
    public function index(): Response
    {
        return $this->render('familia/index.html.twig', [
            'controller_name' => 'SecretariaController',
        ]);
    }
}
