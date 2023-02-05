<?php

namespace App\Controller;

use App\Repository\SuiteRepository;
use App\Repository\EtablissementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
   
    #[Route('/', name: 'home')]
    public function index(SuiteRepository $suiteRepository, EtablissementRepository $etablissementRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'suites' => $suiteRepository->lastThree(),
            'etablissements' => $etablissementRepository->lastThree(),
        ]);
    }
}
