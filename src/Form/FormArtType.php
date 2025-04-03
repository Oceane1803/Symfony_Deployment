<?php
// src/Form/FormArtType.php
namespace App\Form;

use App\Entity\FormArt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormArtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => "Nom de l'article",
                'attr' => ['id' => 'nom']
            ])
            ->add('taille', TextType::class, [
                'label' => 'Taille',
                'attr' => ['id' => 'taille']
            ])
            ->add('prix', NumberType::class, [  // Changé en NumberType pour correspondre au float de l'Entity
                'label' => 'Prix',
                'attr' => ['id' => 'prix']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['id' => 'description']
            ])
            ->add('image_path', FileType::class, [
                'label' => 'Image',
                'required' => false,
                'attr' => ['id' => 'image_path']
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