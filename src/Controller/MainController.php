<?php

namespace App\Controller;

use App\Repository\OrientacionRepository;
use App\Repository\SecretariaRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
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

    #[Route('/familia', name: 'familia')]
    public function indexFamilia(): Response
    {
        return $this->render('main/familia.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
