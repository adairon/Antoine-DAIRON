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
                'attr' => [
                    'placeholder' => 'ex : musée du Louvre'
                ]
            ])
            ->add('photo',TextType::class,[
                'label' => "Image",
                'attr' => [
                    'placeholder' => "url de l'image"
                ]
            ])
            ->add('adresse',TextType::class,[
                'attr' => [
                    'placeholder' => 'ex : 1 rue du musée'
                ]
            ])
            ->add('prix',TextType::class,[
                'attr' => [
                    'placeholder' => "prix moyen d'un ticket"
                ]
            ])
            ->add('presentation',TextType::class,[
                'attr' => [
                    'placeholder' => 'ex : Très beau musée avec de belles oeuvres'
                ]
            ])
            ->add('oeuvre', TextType::class,[
                'label' => "Oeuvres célèbres",
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
