<?php

namespace App\Controller;

use App\Entity\Cita;
use App\Repository\CitaRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CitaController extends AbstractController
{
    #[Route('/prueba', name:'prueba')]
    public function indexAction(ManagerRegistry $doctrine)
    {
        $citasRepository = new CitaRepository($doctrine);
        $citas = $citasRepository->findAll();
        $formatedCitas = $this->formatCitaToJson($citas);

        return $this->render("prueba/prueba.html.twig", [
            'citas' => $formatedCitas
        ]);
    }

    #[Route('/prueba/create', name:'crear')]
    public function createAction(ManagerRegistry $doctrine,Request $request){
        
        $citasRepository = new CitaRepository($doctrine);

        // Use el mismo formato que usa Moment.js en la vista
        $format = "d-m-Y H:i:s";

        $cita = new Cita();
        $cita->setTitulo($request->request->get("title"));
        $cita->setDescripcion($request->request->get("description"));
        $cita->setFechaDeInicio(
            \DateTime::createFromFormat($format, $request->request->get("start_date"))
        );
        $cita->setFechaDeFin(
            \DateTime::createFromFormat($format, $request->request->get("end_date"))
        );

        $em = $doctrine->getManager();
        $em->persist($cita);
        $em->flush();

        return new JsonResponse(array(
            "status" => "success"
        ));
    }
    
    #[Route('/prueba/update/{id}', name:'update')]
    public function updateAction(ManagerRegistry $doctrine,Request $request,$id){
        
        $citasRepository = new CitaRepository($doctrine);
        $cita = $citasRepository->findOneBy(['id'=>$id]);

        if(!$cita){
            return new JsonResponse(array(
                "status" => "error",
                "message" => "The appointment to update $id doesn't exist."
            ));
        }

        // Use el mismo formato que usa Moment.js en la vista
        $format = "d-m-Y H:i:s";

        // Actualizar campos de la cita
        $cita->setTitulo($request->request->get("title"));
        $cita->setDescripcion($request->request->get("description"));
        $cita->setFechaDeInicio(
            \DateTime::createFromFormat($format, $request->request->get("start_date"))
        );
        $cita->setFechaDeFin(
            \DateTime::createFromFormat($format, $request->request->get("end_date"))
        );

        // Actualizar cita
        $em = $doctrine->getManager();
        $em->persist($cita);
        $em->flush();

        return new JsonResponse(array(
            "status" => "success"
        ));
    }

    #[Route('/prueba/delete/{id}', name:'delete')]
    public function deleteAction(ManagerRegistry $doctrine,Request $request,$id){
        $em = $doctrine->getManager();
        $citasRepository = new CitaRepository($doctrine);
        $cita = $citasRepository->findOneBy(['id'=>$id]);

        if(!$cita){
            return new JsonResponse(array(
                "status" => "error",
                "message" => "The given appointment $id doesn't exist."
            ));
        }

        // ¡Eliminar cita de la base de datos!
        $em->remove($cita);
        $em->flush();       

        return new JsonResponse(array(
            "status" => "success"
        ));
    }

    private function formatCitaToJson($citas){
        $formatedCitas = [];
        
        foreach($citas as $cita){
            array_push($formatedCitas, array(
                "id" => $cita->getId(),
                "description" => $cita->getDescripcion(),
                // Es importante mantener start_date, end_date y text con la misma clave
                // para el área de JavaScript
                // aunque el getter podría ser diferente, por ejemplo:
                // "start_date" => $appointment->getBeginDate();
                "text" => $cita->getTitulo(),
                "start_date" => $cita->getFechaDeInicio()->format("Y-m-d H:i"),
                "end_date" => $cita-> getFechaDeFin()->format("Y-m-d H:i")
            ));
        }

        return json_encode($formatedCitas);
    }
}