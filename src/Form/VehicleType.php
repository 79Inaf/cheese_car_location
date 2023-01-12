<?php

namespace App\Form;

use App\Entity\Vehicle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehicleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', TextType::class, [
                'attr' => ['class' => 'form-control mt-2 mb-2'],
            ])
            ->add('nombrePlaces', NumberType::class, [
                'attr' => ['class' => 'form-control mt-2 mb-2'],
            ])
            ->add('annee', NumberType::class, [
                'attr' => ['class' => 'form-control mt-2 mb-2'],
            ])
            ->add('boiteVitesse', TextType::class, [
                'attr' => ['class' => 'form-control mt-2 mb-2'],
            ])
            ->add('energie', TextType::class, [
                'attr' => ['class' => 'form-control mt-2 mb-2'],
            ])
            ->add('marque', TextType::class, [
                'attr' => ['class' => 'form-control mt-2 mb-2'],
            ])
            ->add('photo', TextType::class, [
                'attr' => ['class' => 'form-control mt-2 mb-2'],
            ])
            ->add('kilometrage', NumberType::class, [
                'attr' => ['class' => 'form-control mt-2 mb-2'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicle::class,
        ]);
    }
}
