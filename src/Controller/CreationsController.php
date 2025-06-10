<?php

namespace App\Controller;

use App\Entity\Creations;
use App\Form\CreationsType;
use App\Repository\CreationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;

#[Route('/creations')]
class CreationsController extends AbstractController
{
    #[Route('/', name: 'app_creations_index', methods: ['GET'])]
    public function index(Request $request, CreationsRepository $creationsRepository): Response
    {
        $filterPublicCible = $request->query->get('publicCible');
        $filterCategorie = $request->query->get('categorie');

        $creations = $creationsRepository->findByFilters($filterPublicCible, $filterCategorie);

        $isUser = $this->isGranted('ROLE_USER');
        $isAdmin = $this->isGranted('ROLE_ADMIN');

        return $this->render('creations/index.html.twig', [
            'creations' => $creations,
            'is_user' => $isUser,
            'is_admin' => $isAdmin,
            'filter_publicCible' => $filterPublicCible,
            'filter_categorie' => $filterCategorie,
        ]);
    }

    #[Route('/{id}/personnaliser', name: 'app_personnaliser', methods: ['GET'])]
    public function personnaliser(Creations $creation): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('creations/personnaliser.html.twig', [
            'creation' => $creation,
        ]);
    }

    #[Route('/details/{id}', name: 'creation_details')]
    public function details(EntityManagerInterface $entityManager, int $id): Response
    {
        $creation = $entityManager->getRepository(Creations::class)->find($id);

        if (!$creation) {
            throw $this->createNotFoundException('La création n\'existe pas');
        }

        $isUser = $this->isGranted('ROLE_USER');

        return $this->render('creations/details.html.twig', [
            'creation' => $creation,
            'is_user' => $isUser,
        ]);
    }

    #[Route('/new', name: 'app_creations_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $creation = new Creations();
        $form = $this->createForm(CreationsType::class, $creation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($creation);
            $entityManager->flush();

            return $this->redirectToRoute('app_creations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('creations/new.html.twig', [
            'creation' => $creation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_creations_show', methods: ['GET'])]
    public function show(Creations $creation): Response
    {
        $isUser = $this->isGranted('ROLE_USER');

        return $this->render('creations/show.html.twig', [
            'creation' => $creation,
            'is_user' => $isUser,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_creations_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Creations $creation, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(CreationsType::class, $creation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_creations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('creations/edit.html.twig', [
            'creation' => $creation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_creations_delete', methods: ['POST'])]
    public function delete(Request $request, Creations $creation, EntityManagerInterface $entityManager, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $token = $request->request->get('_token');
        if (!$csrfTokenManager->isTokenValid(new CsrfToken('delete' . $creation->getId(), $token))) {
            throw new InvalidCsrfTokenException('Token CSRF invalide');
        }

        $entityManager->remove($creation);
        $entityManager->flush();

        $this->addFlash('success', 'La création a été supprimée avec succès.');

        return $this->redirectToRoute('app_creations_index');
    }
}
