<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Psr\Log\LoggerInterface;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(
        Request $request, 
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
        LoggerInterface $logger
    ): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Sauvegarde en base de données
                $entityManager->persist($contact);
                $entityManager->flush();
                
                // Création de l'email
                $email = (new TemplatedEmail())
                    ->from('oceanebettaffard@gmail.com')  // Utiliser votre email comme expéditeur fixe
                    ->to('oceanebettaffard@gmail.com')    // Votre email de réception
                    ->replyTo($contact->getEmail())       // L'email du contact pour la réponse
                    ->subject('Nouveau message de contact')
                    ->htmlTemplate('emails/contact.html.twig')
                    ->context([
                        'contact' => $contact
                    ]);
                
                // Debug pour voir ce qui se passe
                dump('Tentative d\'envoi d\'email...');
                
                // Envoi de l'email
                $mailer->send($email);
                
                dump('Email envoyé !');
                
                $this->addFlash('success', 'Votre message a bien été envoyé !');
            } catch (TransportExceptionInterface $e) {
                // Log l'erreur
                dump('Erreur d\'envoi:', $e->getMessage());
                $this->addFlash('error', 'Erreur lors de l\'envoi : ' . $e->getMessage());
            } catch (\Exception $e) {
                // Log toute autre erreur
                dump('Erreur générale:', $e->getMessage());
                $this->addFlash('error', 'Une erreur est survenue : ' . $e->getMessage());
            }
            
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}