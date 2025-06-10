<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends AbstractController
{
    // Route pour la page d'accueil, avec redirection depuis /
    #[Route('/', name: 'home_redirect')]
    public function redirectToHome(): RedirectResponse
    {
        return $this->redirectToRoute('home');
    }

    // Route pour la page d'accueil (par exemple)
    #[Route('/home', name: 'home')]
    public function home()
    {
        return $this->render('home/index.html.twig');
    }
}
