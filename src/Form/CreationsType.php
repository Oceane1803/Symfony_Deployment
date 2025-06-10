<?php

namespace App\Form;

use App\Entity\Creations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Description')
            ->add('imagePath', FileType::class, [
                'label' => 'Image',
                'mapped' => false, // champ non lié à l’entité (upload)
                'required' => false,
            ])
            ->add('Taille')
            ->add('Prix')
            ->add('publicCible', ChoiceType::class, [
                'label' => 'Public ciblé',
                'choices' => [
                    'Homme' => 'homme',
                    'Femme' => 'femme',
                    'Enfant' => 'enfant',
                ],
                'placeholder' => 'Sélectionnez un public',
                'required' => false,
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Jupe' => 'jupe',
                    'Tee-shirt' => 'tee-shirt',
                    'Robe' => 'robe',
                    'Pantalon' => 'pantalon',
                    'Veste' => 'veste',
                    'Accessoire' => 'accessoire',
                ],
                'placeholder' => 'Sélectionnez une catégorie',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Creations::class,
        ]);
    }
}
