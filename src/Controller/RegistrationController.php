<?php

namespace App\Controller;

use App\Entity\Registration;
use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_registration')]
    public function new(): Response
    {
        $registration = new Registration();
        $form = $this->createForm(RegistrationType::class, $registration);

        return $this->render('registration/new.html.twig', [
            'form' => $form,
        ]);
    }
}
