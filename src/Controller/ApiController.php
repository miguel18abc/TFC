<?php

namespace App\Controller;

use App\Entity\Calendar;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    // #[Route('/api', name: 'app_api')]
    // public function index(): Response
    // {
    //     return $this->render('api/index.html.twig', [
    //         'controller_name' => 'ApiController',
    //     ]);
    // }

    #[Route('/api/{id}/edit', name: 'api_event_edit', methods:'PUT')]
    public function majEvent(?Calendar $calendar,Request $request,ManagerRegistry $doctrine): Response
    {

        $data = $this->json($request->getContent());

        if (isset($data->title) && !empty($data->title) &&
            isset($data->start) && !empty($data->start) &&
            isset($data->description) && !empty($data->description) &&
            isset($data->backgroundColor) && !empty($data->backgroundColor) &&
            isset($data->borderColor) && !empty($data->borderColor) &&
            isset($data->textColor) && !empty($data->textColor))
            {
                $code = 200;

                if (!$calendar) {
                    $calendar = new Calendar();
                    $code = 201;
                }

                $calendar->setTitle($data->title);
                $calendar->setStart(new DateTime($data->start));
                $calendar->setDescription($data->description);
                if ($data->allDay) {
                    $calendar->setEnd(new DateTime($data->start));
                }else{
                    $calendar->setEnd(new DateTime($data->end));
                }
                $calendar->setBackgroundColor($data->backgroundColor);
                $calendar->setBorderColor($data->borderColor);
                $calendar->setTextColor($data->textColor);

                $em = $doctrine->getManager();
                $em->persist($calendar);
                $em->flush();

                return new Response('Ok',$code);
            }else{
                return new Response('Datos incompletos',404);
            }

        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }
}
