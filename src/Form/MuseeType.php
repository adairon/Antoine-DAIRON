<?php

namespace App\Form;

use App\Entity\Musee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MuseeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,[
                'label' => "Nom du musée",
                'required'=>false,
                'attr' => [
                    'placeholder' => 'ex : musée du Louvre'
                ]
            ])
            ->add('photo',TextType::class,[
                'label' => "Image",
                'required'=>false,
                'attr' => [
                    'placeholder' => "url de l'image"
                ]
            ])
            ->add('adresse',TextType::class,[
                'required'=>false,
                'attr' => [
                    'placeholder' => 'ex : 1 rue du musée'
                ]
            ])
            ->add('prix',TextType::class,[
                'label' => "Prix des tickets",
                'required'=>false,
                'attr' => [
                    'placeholder' => "ex : entre 0 et 20 €"
                ]
            ])
            ->add('presentation',TextType::class,[
                'required'=>false,
                'attr' => [
                    'placeholder' => 'ex : Très beau musée avec de belles oeuvres'
                ]
            ])
            ->add('oeuvre', TextType::class,[
                'label' => "Oeuvres célèbres",
                'required'=>false,
                'attr' => [
                    'placeholder' => 'ex : ce tableau ou cette scuplture emblématique du musée'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Musee::class,
        ]);
    }
}
