<?php

namespace App\Controller;

use App\Entity\FormArt;
use App\Form\EditArtType;
use App\Form\FormArtType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class EditArtController extends AbstractController
{
    #[Route('/edit/art/{id}', name: 'app_edit_art')]
    public function edit(
        int $id,
        Request $request, 
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $formArt = $entityManager->getRepository(FormArt::class)->find($id);
        
        if (!$formArt) {
            throw $this->createNotFoundException('Article non trouvé');
        }

        $form = $this->createForm(EditArtType::class, $formArt);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image_path')->getData();
            if ($imageFile) {
                $originalFilename = $imageFile->getClientOriginalName();
                $formArt->setImageFileName($originalFilename);
    
                $newFilename = $originalFilename;
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $formArt->setImagePath($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image');
                    return $this->redirectToRoute('app_edit_art', ['id' => $id]);
                }
            }
    
            $entityManager->flush();
    
            $this->addFlash('success', 'L\'article a été modifié avec succès');
            return $this->redirectToRoute('app_creations');
        }

        return $this->render('edit_art/edit.html.twig', [
            'form' => $form->createView(),
            'article' => $formArt
        ]);
    }
}