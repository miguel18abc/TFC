<?php

namespace App\Controller;

use App\Entity\Cita;
use App\Entity\Reserva;
use App\Form\ReservaType;
use App\Repository\CitaRepository;
use App\Repository\ReservaRepository;
use App\Repository\UserRepository;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use function PHPUnit\Framework\throwException;

class FamiliaController extends AbstractController
{

    private $requestStack;
    

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/familia/orientacion', name: 'orientacion')]
    public function indexOrientacion(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();

        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>1]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','orientacion');
        $servicio = $session->get('servicio');

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio]);
    }

    #[Route('/familia/secretaria', name: 'secretaria')]
    public function indexSecretaria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>2]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        
        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','secretaria');
        $servicio = $session->get('servicio');

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio]);
    }

    #[Route('/familia/tutoria', name: 'tutoria')]
    public function indexTutoria(ManagerRegistry $doctrine,AuthenticationUtils $authenticationUtils): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>3]);

        if (!$citas) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        $session = $this->requestStack->getSession();
        $session->start();
        $session->set('servicio','tutoria');
        $servicio = $session->get('servicio');

        return $this->render('familia/index.html.twig', ['citas' => $citas,'username' => $lastUsername,'servicio' => $servicio]);
    }

    #[Route('/familia/tutoria/{id}', name: 'tutoria_reserva')]
    public function reservaTutoria(ManagerRegistry $doctrine, Request $request,AuthenticationUtils $authenticationUtils,$id)
    { 
            $session = $this->requestStack->getSession();
            $session->start();
            $username = $authenticationUtils->getLastUsername();
            $citaRepository = new CitaRepository($doctrine);
            $userRepository = new UserRepository($doctrine);
            $reserva = new Reserva();
            $form = $this->createForm(ReservaType::class, $reserva);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                try{
                    $em = $doctrine->getManager();
                    $cita = $citaRepository->findOneBy(['id' => $id]);
                    $user = $userRepository->findOneBy(['username' => $username]);
                    $cita->setUser($user);
                    $reserva->setCita($cita);
                    $em->persist($cita);
                    $em->persist($reserva);
                    $em->flush();

                } catch (UniqueConstraintViolationException) {
                    $error = $authenticationUtils->getLastAuthenticationError();
                    $servicio = $session->get('servicio');
                    $citas = $citaRepository->findBy(['Servicio'=>3]);
                    return $this->render('familia/index.html.twig',['form' => $form->createView(),'citas'=> $citas,'username' => $username,'error' => $error, 'servicio' => $servicio]);  
                }
                $this->addFlash('success', 'Datos guardados.');

                return $this->render('familia/exito.twig',['id' => $id,'username' => $username]);
            }
                return $this->render('familia/reserva.html.twig',['form' => $form->createView(),'id' => $id,'username' => $username]);
        
    }
    
    public function menuFamilias(AuthenticationUtils $authenticationUtils,$id)
    {
        $session = $this->requestStack->getSession();
        $servicio = $session->get('servicio');
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('familia/menu.html.twig', ['username' => $lastUsername,'servicio' => $servicio,'id' => $id]);

    }

    #[Route('/consulta/orientacion/{username}', name:'cita_consulta_orientacion')]
    public function consultasOrientacion(string $username,ManagerRegistry $doctrine)
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>1]);
        return $this->render('familia/reservas.html.twig', ['citas' => $citas,'username' => $username]);
    }

    #[Route('/consulta/secretaria/{username}', name:'cita_consulta_secretaria')]
    public function consultasSecretaria(string $username,ManagerRegistry $doctrine)
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>2]);
        return $this->render('familia/reservas.html.twig', ['citas' => $citas,'username' => $username]);
    }

    
    #[Route('/consulta/tutoria/{username}', name:'cita_consulta_tutoria')]
    public function consultasTutoria(string $username,ManagerRegistry $doctrine)
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findBy(['Servicio'=>3]);
        return $this->render('familia/reservas.html.twig', ['citas' => $citas,'username' => $username]);
    }






    // Fernando OK

    #[Route('/listado', name:'cita_listado')]
    public function listado(ManagerRegistry $doctrine)
    {
        $citaRepository = new CitaRepository($doctrine);
        $citas = $citaRepository->findByDate();
        return $this->render('familia/listado.html.twig', ["citas" => $citas]);
    }

    // Fernando OK

    #[Route('/reserva/{id}', name: 'reserva')]
    public function reserva(ManagerRegistry $doctrine, Request $request, $id)
    { {

            $citaRepository = new CitaRepository($doctrine);
            $reserva = new Reserva();
            $form = $this->createForm(ReservaType::class, $reserva);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $doctrine->getManager();
                
                $cita = $citaRepository->findOneBy(['id'=>$id]);
                $reserva->setCita($cita);
                $em->persist($reserva);
                $em->flush();

                return $this->render('familia/exito.twig');
            } else
                return $this->render('familia/reserva.html.twig', array('form' => $form->createView(),));
        }
    }

    // Fernando OK

    // #[Route('/consulta', name:'cita_consulta')]
    // public function consulta(Request $request)
    // {
    //     /* $reservaRepository = new ReservaRepository($doctrine); */
    //     /* $requestStack = new RequestStack($doctrine); */
    //     $form = $this->createFormBuilder()
    //         ->add('dni', TextType::class)
    //         ->add('telefono', TextType::class)
    //         ->add('Send', SubmitType::class)
    //         ->getForm();


    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $data = $form->getData();

    //         $reservas = $this->reservaRepository->findAllDniTelefono($data['dni'], $data['telefono']);
    //         if ($reservas) {
    //             $session = $this->requestStack->getSession();
    //             $session->set('dni', $data['dni']);
    //             $session->set('telefono', $data['telefono']);
    //         }
    //         return $this->render('familia/reservas.html.twig', array('reservas' => $reservas));
    //     } else
    //         return $this->render('familia/form.html.twig', array('form' => $form->createView(),));
    // }

    // Fernando
    
    #[Route('cita/anular/{id}', name:'anular_cita')]
    public function anular_cita(ManagerRegistry $doctrine, $id): Response
    {
        $reservaRepository = new ReservaRepository($doctrine, $doctrine->getManager());
        $reserva = $reservaRepository->findOneBy(['id' => $id]);
        $em = $doctrine->getManager();
        $em->remove($reserva);
        return $this->render('familia/anulaReserva.html.twig', ['reserva']);
    }

    // Fernando

    #[Route('anular/{id}', name:'anular')]
    public function anular(ManagerRegistry $doctrine, $id)
    {
        $reservaRepository = new ReservaRepository($doctrine, $doctrine->getManager());
        $reserva = $reservaRepository->findOneById($id);
        $reservaRepository->remove($reserva);
        return $this->render('familia/anulaReserva.html.twig', []);
    }

    // Fernando

    #[Route('/anulacion/{id}', name:'cita_anulacion')]
    public function anulacion($id)
    {
        $session = $this->requestStack->getSession();


        // gets an attribute by name
        $dni = $session->get('dni');
        // gets an attribute by name
        $telefono = $session->get('telefono');



        if (!$dni || !$telefono)
            return $this->render('familia/msg.html.twig', array('msg' => 'Se ha producido un error'));

        $reserva = $this->reservaRepository->findOneById($id);
        if (!$reserva || $reserva->getDni() != $dni || $reserva->getTelefono() != $telefono)
            return $this->render('familia/msg.html.twig', array('msg' => 'Se ha producido un error'));
        $this->reservaRepository->remove($reserva);
        return $this->render('familia/msg.html.twig', array('msg' => 'Se ha eliminado su reserva'));
    }
}
