<?php

namespace App\Controller;

use App\Repository\SuiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(SuiteRepository $suiteRepository): Response
    {
        return $this->render('user/user.html.twig', [
            'controller_name' => 'UserController',
            'suites' => $suiteRepository->lastThree(),
        ]);
    }
}
