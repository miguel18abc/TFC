<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 

// Incluya las clases utilizadas como JsonResponse y el objeto Request
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

// La entidad de su cita
use AppBundle\Entity\Appointments as Appointment;

class SchedulerController extends Controller
{
    /**
     * Vista que genera el planificador.
     *
     */
    public function indexAction()
    {
        // Recuperar administrador de entidad
        $em = $this->getDoctrine()->getManager();
        
        // Obtener repositorio de citas
        $repositoryAppointments = $em->getRepository("AppBundle:Appointments");

        // Tenga en cuenta que es posible que desee filtrar las citas que desea enviar
        // por fechas o algo, de lo contrario enviará todas las citas para rendir
        $appointments = $repositoryAppointments->findAll();

        // Genere la estructura JSON de las citas para representar en el programador de inicio.
        $formatedAppointments = $this->formatAppointmentsToJson($appointments);

        // Renderizar planificador
        return $this->render("default/scheduler.html.twig", [
            'appointments' => $formatedAppointments
        ]);
    }

    /**
     * Manejar la creación de una cita.
     *
     */
    public function createAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $repositoryAppointments = $em->getRepository("AppBundle:Appointments");

        // Use el mismo formato que usa Moment.js en la vista
        $format = "d-m-Y H:i:s";

        // Crear entidad de cita y establecer valores de campos
        $appointment = new Appointment();
        $appointment->setTitle($request->request->get("title"));
        $appointment->setDescription($request->request->get("description"));
        $appointment->setStartDate(
            \DateTime::createFromFormat($format, $request->request->get("start_date"))
        );
        $appointment->setEndDate(
            \DateTime::createFromFormat($format, $request->request->get("end_date"))
        );

        // Crear cita
        $em->persist($appointment);
        $em->flush();

        return new JsonResponse(array(
            "status" => "success"
        ));
    }
    
    /**
     * Manejar la actualización de las citas.
     *
     */
    public function updateAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $repositoryAppointments = $em->getRepository("AppBundle:Appointments");

        $appointmentId = $request->request->get("id");

        $appointment = $repositoryAppointments->find($appointmentId);

        if(!$appointment){
            return new JsonResponse(array(
                "status" => "error",
                "message" => "The appointment to update $appointmentId doesn't exist."
            ));
        }

        // Use el mismo formato que usa Moment.js en la vista
        $format = "d-m-Y H:i:s";

        // Actualizar campos de la cita
        $appointment->setTitle($request->request->get("title"));
        $appointment->setDescription($request->request->get("description"));
        $appointment->setStartDate(
            \DateTime::createFromFormat($format, $request->request->get("start_date"))
        );
        $appointment->setEndDate(
            \DateTime::createFromFormat($format, $request->request->get("end_date"))
        );

        // Actualizar cita
        $em->persist($appointment);
        $em->flush();

        return new JsonResponse(array(
            "status" => "success"
        ));
    }

    /**
     * Elimina una cita de la base de datos
     *
     */
    public function deleteAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $repositoryAppointments = $em->getRepository("AppBundle:Appointments");

        $appointmentId = $request->request->get("id");

        $appointment = $repositoryAppointments->find($appointmentId);

        if(!$appointment){
            return new JsonResponse(array(
                "status" => "error",
                "message" => "The given appointment $appointmentId doesn't exist."
            ));
        }

        // ¡Eliminar cita de la base de datos!
        $em->remove($appointment);
        $em->flush();       

        return new JsonResponse(array(
            "status" => "success"
        ));
    }


    /**
     * Devuelve una cadena JSON de un grupo de citas que se representarán en el calendario.
     * Puede usar una biblioteca de serializador si lo desea.
     *
     * Las fechas deben seguir el formato d-m-Y H:i e.g : "13-07-2017 09:00"
     *
     *
     * @param $appointments
     */
    private function formatAppointmentsToJson($appointments){
        $formatedAppointments = array();
        
        foreach($appointments as $appointment){
            array_push($formatedAppointments, array(
                "id" => $appointment->getId(),
                "description" => $appointment->getDescription(),
                // Es importante mantener start_date, end_date y text con la misma clave
                // para el área de JavaScript
                // aunque el getter podría ser diferente, por ejemplo:
                // "start_date" => $appointment->getBeginDate();
                "text" => $appointment->getTitle(),
                "start_date" => $appointment->getStartDate()->format("Y-m-d H:i"),
                "end_date" => $appointment->getEndDate()->format("Y-m-d H:i")
            ));
        }

        return json_encode($formatedAppointments);
    }
}