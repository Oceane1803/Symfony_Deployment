<?php

namespace App\Form;

use App\Entity\FormArt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormArt1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => "Nom de l'article",
            ])
            ->add('taille', TextType::class, [
                'label' => 'Taille',
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
            ])
            ->add('image_path', FileType::class, [
                'label' => 'Image',
                'required' => false,
                'mapped' => false,
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Accessoire' => 'accessoire',
                    'Pantalon' => 'pantalon',
                    'Robe' => 'robe',
                    'Tee-shirt' => 'tee-shirt',
                    'Veste' => 'veste',
                    'Jupe' => 'jupe',
                ],
                'placeholder' => 'Choisir une catégorie',
                'required' => false,
            ])
            ->add('public_cible', ChoiceType::class, [
                'label' => 'Public Cible',
                'choices' => [
                    'Enfant' => 'enfant',
                    'Femme' => 'femme',
                    'Homme' => 'homme',
                    'Tous' => 'tous',
                ],
                'placeholder' => 'Choisir un public',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FormArt::class,
        ]);
    }
}
