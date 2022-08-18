<?php

namespace App\Form;

use App\Entity\Cita;
use App\Entity\Reserva;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReservaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre',TextType::class,['label'=> 'Nombre', 'required'=> true])
            ->add('apellidos',TextType::class,['label'=> 'Apellidos', 'required'=> true])
            ->add('dni',TextType::class,['label'=> 'DNI', 'required'=> true])
            ->add('telefono',NumberType::class,['label'=> 'Telefono', 'required'=> true])
            ->add('email',EmailType::class,['label'=> 'Email', 'required'=> true])
            ->add('send', SubmitType::class, ['label' => 'Enviar']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reserva::class,
        ]);
    }
}
