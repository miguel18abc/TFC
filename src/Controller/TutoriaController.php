<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TutoriaController extends AbstractController
{
    #[Route('/tutoria', name: 'app_tutoria')]
    public function index(): Response
    {
        return $this->render('tutoria/index.html.twig', [
            'controller_name' => 'TutoriaController',
        ]);
    }
}
