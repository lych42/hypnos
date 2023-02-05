<?php

namespace App\Controller;

use App\Repository\EtablissementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtablissementsController extends AbstractController
{
    #[Route('/etablissements', name: 'etablissements')]
    public function etablissements(EtablissementRepository $etablissementRepository): Response
    {
        return $this->render('etablissements/etablissements.html.twig', [
            'etablissements' => $etablissementRepository->findAll(),
        ]);
    }
}
