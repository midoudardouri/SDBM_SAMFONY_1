<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MaincontrolController extends AbstractController
{
    #[Route('/', name: 'app_maincontrol')]
    public function index(): Response
    {
        return $this->render('maincontrol/index.html.twig', [
            'controller_name' => 'MaincontrolController',
        ]);
    }
}
