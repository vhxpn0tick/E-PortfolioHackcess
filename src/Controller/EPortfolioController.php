<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EPortfolioController extends AbstractController
{
    #[Route('/', name: 'app_e_portfolio')]
    public function index(): Response
    {
        return $this->render('e_portfolio/index.html.twig', [
            'controller_name' => 'EPortfolioController',
        ]);
    }

    #[Route('/competence/administrer', name: 'competence_administrer')]
    public function administrer(): Response
    {
        return $this->render('competence/administrer.html.twig');
    }

    #[Route('/competence/connecter', name: 'competence_connecter')]
    public function connecter(): Response
    {
        return $this->render('competence/connecter.html.twig');
    }

    #[Route('/competence/programmer', name: 'competence_programmer')]
    public function programmer(): Response
    {
        return $this->render('competence/programmer.html.twig');
    }

    #[Route('/competence/securiser', name: 'competence_securiser')]
    public function securiser(): Response
    {
        return $this->render('competence/securiser.html.twig');
    }

    #[Route('/competence/proteger', name: 'competence_proteger')]
    public function proteger(): Response
    {
        return $this->render('competence/proteger.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('e_portfolio/contact.html.twig');
    }

    #[Route('/contact/submit', name: 'contact_submit', methods: ['POST'])]
    public function submit(Request $request, MailerInterface $mailer): Response
    {
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        $emailMessage = (new Email())
            ->from($email)
            ->to('mathieu.dumas@hackcess.org') // Remplacez par votre adresse e-mail personnelle
            ->subject($subject)
            ->text("Nom: $name\nEmail: $email\n\nMessage:\n$message");

        $mailer->send($emailMessage);

        $this->addFlash('success', 'Votre message a été envoyé avec succès.');

        return $this->redirectToRoute('contact');
    }
}