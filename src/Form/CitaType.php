<?php

namespace App\Form;

use App\Entity\Cita;
use App\Entity\Servicios;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CitaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha',DateType::class,['label' => 'Fecha','required' => true])
            ->add('hora', TimeType::class,['label' => 'Hora','required' => true])
            ->add('Servicio', EntityType::class,['label' => 'Servicio','required' => true,'class' => Servicios::class,'choice_label' => 'Nombre'])
            ->add('Crear_cita',SubmitType::class,['label' => 'Crear cita'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cita::class,
        ]);
    }
}
