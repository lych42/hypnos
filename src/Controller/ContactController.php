<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use App\Entity\Contact;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request): Response
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($contact);die;
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form ->createView(),
        ]);
    }
}
