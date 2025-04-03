<?php

namespace App\Controller;

use App\Entity\FormArt;
use App\Form\FormArtType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class FormArtController extends AbstractController
{
    #[Route('/FormArt', name: 'app_formart')]
    public function index(
        Request $request, 
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $formArt = new FormArt();
        $form = $this->createForm(FormArtType::class, $formArt);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image_path')->getData();
            if ($imageFile) {
                $originalFilename = $imageFile->getClientOriginalName();
                $formArt->setImageFileName($originalFilename); // Définir le nom d'origine du fichier
    
                $newFilename = $originalFilename; // Utiliser le nom d'origine
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $formArt->setImagePath($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image');
                    return $this->redirectToRoute('app_formart');
                }
            }
    
            $entityManager->persist($formArt);
            $entityManager->flush();
    
            $this->addFlash('success', 'L\'article a été créé avec succès');
            return $this->redirectToRoute('app_creations');
        }

        return $this->render('form_art/index.html.twig', [
            'controller_name' => 'FormArtController',
            'form' => $form->createView()
        ]);
    }
}