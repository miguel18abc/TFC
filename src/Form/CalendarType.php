<?php

namespace App\Form;

use App\Entity\Calendar;
use App\Entity\Servicios;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class,['label' => 'Título','required' => true])
            ->add('start',DateType::class,['label' => 'Inicio','widget'=> 'single_text','model_timezone' => 'Europe/Madrid','required' => true])
            ->add('end',DateType::class,['label' => 'Fin','widget'=> 'single_text','model_timezone' => 'Europe/Madrid','required' => true])
            ->add('description',TextType::class,['label' => 'Descripción','required' => true])
            ->add('servicios',EntityType::class,['label' => 'Servicio','required' => true,'class' => Servicios::class,'choice_label' => 'Nombre'])
            ->add('background_color',ColorType::class)
            ->add('border_color',ColorType::class)
            ->add('text_color',ColorType::class)
            ->add('submit',SubmitType::class, ['label' => 'Enviar'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
        ]);
    }
}
