<?php

namespace App\Controller;

use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
        // return new Response('',404);
    }

    #[Route('/plantilla', name: 'plantilla')]
    public function indexPlantilla(): Response
    {
        return $this->render('main/plantilla.html.twig');
    }

    #[Route('/familia', name: 'familia')]
    public function indexFamilia(): Response
    {
        return $this->render('main/familia.html.twig');
    }
}
