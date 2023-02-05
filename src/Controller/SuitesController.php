<?php

namespace App\Controller;

use App\Repository\SuiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuitesController extends AbstractController
{
    #[Route('/suites', name: 'suites')]
    public function suites(SuiteRepository $suiteRepository): Response
    {
        return $this->render('suites/suites.html.twig', [
            'suites' => $suiteRepository->findAll(),
        ]);
    }
}
