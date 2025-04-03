<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    #[IsGranted('ROLE_ADMIN', message: 'Accès refusé : vous devez être administrateur.')]
    public function dashboard(): Response
    {

        // Vérification supplémentaire de sécurité
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Accès refusé : vous devez être administrateur.');
        }
        
        return $this->render('dashboard/index.html.twig');
    }
    
}
?>