<?php

namespace App\Form;

use App\Entity\Calendar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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
            ->add('start',DateTimeType::class,['label' => 'Inicio','model_timezone' => 'Europe/Madrid','widget' => 'single_text','required' => true])
            ->add('end',DateTimeType::class,['label' => 'Fin','model_timezone' => 'Europe/Madrid','widget' => 'single_text','required' => true])
            ->add('description',TextType::class,['label' => 'Descripción','required' => true])
            ->add('submit',SubmitType::class, ['label' => 'Enviar']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
        ]);
    }
}
